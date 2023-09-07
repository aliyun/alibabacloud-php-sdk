<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBNodesParametersResponseBody\DBNodeIds;
use AlibabaCloud\Tea\Model;

class DescribeDBNodesParametersResponseBody extends Model
{
    /**
     * @description The IDs of the nodes.
     *
     * @var DBNodeIds[]
     */
    public $DBNodeIds;

    /**
     * @description The type of the database engine. Set the value to **MySQL**.
     *
     * @example MySQL
     *
     * @var string
     */
    public $DBType;

    /**
     * @description The version of the MySQL database engine. Valid values:
     *
     *   **5.6**
     *   **5.7**
     *   **8.0**
     *
     * @example 5.6
     *
     * @var string
     */
    public $DBVersion;

    /**
     * @description The cluster engine.
     *
     * @example POLARDB
     *
     * @var string
     */
    public $engine;

    /**
     * @description The request ID.
     *
     * @example 9B7BFB11-C077-4FE3-B051-F69CEB******
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBNodeIds' => 'DBNodeIds',
        'DBType'    => 'DBType',
        'DBVersion' => 'DBVersion',
        'engine'    => 'Engine',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBNodeIds) {
            $res['DBNodeIds'] = [];
            if (null !== $this->DBNodeIds && \is_array($this->DBNodeIds)) {
                $n = 0;
                foreach ($this->DBNodeIds as $item) {
                    $res['DBNodeIds'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->DBType) {
            $res['DBType'] = $this->DBType;
        }
        if (null !== $this->DBVersion) {
            $res['DBVersion'] = $this->DBVersion;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBNodesParametersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBNodeIds'])) {
            if (!empty($map['DBNodeIds'])) {
                $model->DBNodeIds = [];
                $n                = 0;
                foreach ($map['DBNodeIds'] as $item) {
                    $model->DBNodeIds[$n++] = null !== $item ? DBNodeIds::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DBType'])) {
            $model->DBType = $map['DBType'];
        }
        if (isset($map['DBVersion'])) {
            $model->DBVersion = $map['DBVersion'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
