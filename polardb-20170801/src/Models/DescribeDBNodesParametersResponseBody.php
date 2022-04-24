<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBNodesParametersResponseBody\DBNodeIds;
use AlibabaCloud\Tea\Model;

class DescribeDBNodesParametersResponseBody extends Model
{
    /**
     * @var DBNodeIds[]
     */
    public $DBNodeIds;

    /**
     * @var string
     */
    public $DBType;

    /**
     * @var string
     */
    public $DBVersion;

    /**
     * @var string
     */
    public $engine;

    /**
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
