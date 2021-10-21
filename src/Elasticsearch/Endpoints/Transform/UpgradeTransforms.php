<?php
/**
 * Elasticsearch PHP client
 *
 * @link      https://github.com/elastic/elasticsearch-php/
 * @copyright Copyright (c) Elasticsearch B.V (https://www.elastic.co)
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @license   https://www.gnu.org/licenses/lgpl-2.1.html GNU Lesser General Public License, Version 2.1 
 * 
 * Licensed to Elasticsearch B.V under one or more agreements.
 * Elasticsearch B.V licenses this file to you under the Apache 2.0 License or
 * the GNU Lesser General Public License, Version 2.1, at your option.
 * See the LICENSE file in the project root for more information.
 */
declare(strict_types = 1);

namespace Elasticsearch\Endpoints\Transform;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class UpgradeTransforms
 * Elasticsearch API name transform.upgrade_transforms
 *
 * NOTE: this file is autogenerated using util/GenerateEndpoints.php
 * and Elasticsearch 8.0.0-SNAPSHOT (a10236e3287cbdc7b936e15dcddc9b8b19716a4b)
 */
class UpgradeTransforms extends AbstractEndpoint
{

    public function getURI(): string
    {

        return "/_transform/_upgrade";
    }

    public function getParamWhitelist(): array
    {
        return [
            'dry_run'
        ];
    }

    public function getMethod(): string
    {
        return 'POST';
    }
}