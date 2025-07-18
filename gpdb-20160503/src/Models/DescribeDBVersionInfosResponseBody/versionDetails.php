<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBVersionInfosResponseBody;

use AlibabaCloud\Tea\Model;

class versionDetails extends Model
{
    /**
     * @description The queried minor version information about the instance in Serverless mode.
     *
     * @example "Serverless": [
     * {
     * "engineVersion": "6.0",
     * "versionInfos": [
     * {
     * "kernelVersion": "v2.0.0.5",
     * "releaseDate": "2023-05-28T07:48Z",
     * "expirationDate": "2026-05-28T07:48Z"
     * },
     * {
     * "kernelVersion": "v2.0.0.1",
     * "releaseDate": "2023-03-27T12:44Z",
     * "expirationDate": "2026-03-27T12:44Z"
     * },
     * {
     * "kernelVersion": "v1.0.5.1",
     * "releaseDate": "2023-02-22T11:39Z",
     * "expirationDate": "2026-02-22T11:39Z"
     * }
     * ]
     * }
     * ]
     *
     * @var mixed
     */
    public $serverless;

    /**
     * @description The queried minor version information about the instance in elastic storage mode.
     *
     * @example "StorageElasic": [
     * {
     * "engineVersion": "6.0",
     * "versionInfos": [
     * {
     * "kernelVersion": "v6.3.11.2",
     * "releaseDate": "2023-08-17T09:14Z",
     * "expirationDate": "2026-08-17T09:14Z"
     * }
     * },
     * {
     * "engineVersion": "7.0",
     * "versionInfos": [
     * {
     * "kernelVersion": "v7.0.2.0",
     * "releaseDate": "2023-08-09T06:47Z",
     * "expirationDate": "2026-08-09T06:47Z"
     * },
     * {
     * "kernelVersion": "v7.0.1.8",
     * "releaseDate": "2023-05-25T06:56Z",
     * "expirationDate": "2026-05-25T06:56Z"
     * }
     * ]
     * }
     * ]
     *
     * @var mixed
     */
    public $storageElastic;
    protected $_name = [
        'serverless' => 'Serverless',
        'storageElastic' => 'StorageElastic',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->serverless) {
            $res['Serverless'] = $this->serverless;
        }
        if (null !== $this->storageElastic) {
            $res['StorageElastic'] = $this->storageElastic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return versionDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Serverless'])) {
            $model->serverless = $map['Serverless'];
        }
        if (isset($map['StorageElastic'])) {
            $model->storageElastic = $map['StorageElastic'];
        }

        return $model;
    }
}
