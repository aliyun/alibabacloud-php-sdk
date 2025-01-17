<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedInstanceListResponseBody\exposedInstances;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedInstanceListResponseBody\pageInfo;

class DescribeExposedInstanceListResponseBody extends Model
{
    /**
     * @var exposedInstances[]
     */
    public $exposedInstances;
    /**
     * @var pageInfo
     */
    public $pageInfo;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'exposedInstances' => 'ExposedInstances',
        'pageInfo'         => 'PageInfo',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->exposedInstances)) {
            Model::validateArray($this->exposedInstances);
        }
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exposedInstances) {
            if (\is_array($this->exposedInstances)) {
                $res['ExposedInstances'] = [];
                $n1                      = 0;
                foreach ($this->exposedInstances as $item1) {
                    $res['ExposedInstances'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
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
        if (isset($map['ExposedInstances'])) {
            if (!empty($map['ExposedInstances'])) {
                $model->exposedInstances = [];
                $n1                      = 0;
                foreach ($map['ExposedInstances'] as $item1) {
                    $model->exposedInstances[$n1++] = exposedInstances::fromMap($item1);
                }
            }
        }

        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
