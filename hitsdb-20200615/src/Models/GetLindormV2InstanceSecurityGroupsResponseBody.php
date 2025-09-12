<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormV2InstanceSecurityGroupsResponseBody\sgList;

class GetLindormV2InstanceSecurityGroupsResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessDeniedDetail;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var sgList[]
     */
    public $sgList;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'instanceId' => 'InstanceId',
        'requestId' => 'RequestId',
        'sgList' => 'SgList',
    ];

    public function validate()
    {
        if (\is_array($this->sgList)) {
            Model::validateArray($this->sgList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = $this->accessDeniedDetail;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sgList) {
            if (\is_array($this->sgList)) {
                $res['SgList'] = [];
                $n1 = 0;
                foreach ($this->sgList as $item1) {
                    $res['SgList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AccessDeniedDetail'])) {
            $model->accessDeniedDetail = $map['AccessDeniedDetail'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SgList'])) {
            if (!empty($map['SgList'])) {
                $model->sgList = [];
                $n1 = 0;
                foreach ($map['SgList'] as $item1) {
                    $model->sgList[$n1] = sgList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
