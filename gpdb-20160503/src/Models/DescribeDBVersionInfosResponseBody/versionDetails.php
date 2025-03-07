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
     * ]
     * @var mixed
     */
    public $serverless;

    /**
     * @description The queried minor version information about the instance in elastic storage mode.
     *
     * @example "StorageElasic": [
     * ]
     * @var mixed
     */
    public $storageElastic;
    protected $_name = [
        'serverless'     => 'Serverless',
        'storageElastic' => 'StorageElastic',
    ];

    public function validate()
    {
    }

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
