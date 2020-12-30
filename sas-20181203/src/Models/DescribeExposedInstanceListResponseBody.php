<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedInstanceListResponseBody\exposedInstances;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedInstanceListResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class DescribeExposedInstanceListResponseBody extends Model
{
    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var exposedInstances[]
     */
    public $exposedInstances;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'pageInfo'         => 'PageInfo',
        'requestId'        => 'RequestId',
        'exposedInstances' => 'ExposedInstances',
        'success'          => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->exposedInstances) {
            $res['ExposedInstances'] = [];
            if (null !== $this->exposedInstances && \is_array($this->exposedInstances)) {
                $n = 0;
                foreach ($this->exposedInstances as $item) {
                    $res['ExposedInstances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeExposedInstanceListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ExposedInstances'])) {
            if (!empty($map['ExposedInstances'])) {
                $model->exposedInstances = [];
                $n                       = 0;
                foreach ($map['ExposedInstances'] as $item) {
                    $model->exposedInstances[$n++] = null !== $item ? exposedInstances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
