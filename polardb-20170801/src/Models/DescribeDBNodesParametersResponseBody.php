<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBNodesParametersResponseBody\DBNodeIds;

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
        'DBType' => 'DBType',
        'DBVersion' => 'DBVersion',
        'engine' => 'Engine',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->DBNodeIds)) {
            Model::validateArray($this->DBNodeIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBNodeIds) {
            if (\is_array($this->DBNodeIds)) {
                $res['DBNodeIds'] = [];
                $n1 = 0;
                foreach ($this->DBNodeIds as $item1) {
                    $res['DBNodeIds'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBNodeIds'])) {
            if (!empty($map['DBNodeIds'])) {
                $model->DBNodeIds = [];
                $n1 = 0;
                foreach ($map['DBNodeIds'] as $item1) {
                    $model->DBNodeIds[$n1++] = DBNodeIds::fromMap($item1);
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
