<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebAreaBlockConfigsResponseBody\areaBlockConfigs;

class DescribeWebAreaBlockConfigsResponseBody extends Model
{
    /**
     * @var areaBlockConfigs[]
     */
    public $areaBlockConfigs;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'areaBlockConfigs' => 'AreaBlockConfigs',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->areaBlockConfigs)) {
            Model::validateArray($this->areaBlockConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->areaBlockConfigs) {
            if (\is_array($this->areaBlockConfigs)) {
                $res['AreaBlockConfigs'] = [];
                $n1 = 0;
                foreach ($this->areaBlockConfigs as $item1) {
                    $res['AreaBlockConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AreaBlockConfigs'])) {
            if (!empty($map['AreaBlockConfigs'])) {
                $model->areaBlockConfigs = [];
                $n1 = 0;
                foreach ($map['AreaBlockConfigs'] as $item1) {
                    $model->areaBlockConfigs[$n1] = areaBlockConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
