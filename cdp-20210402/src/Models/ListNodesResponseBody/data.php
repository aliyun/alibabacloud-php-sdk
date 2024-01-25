<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdp\V20210402\Models\ListNodesResponseBody;

use AlibabaCloud\SDK\Cdp\V20210402\Models\ListNodesResponseBody\data\ecsNodeDtoList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var ecsNodeDtoList[]
     */
    public $ecsNodeDtoList;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var mixed[]
     */
    public $instanceConf;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;
    protected $_name = [
        'createTime'     => 'CreateTime',
        'ecsNodeDtoList' => 'EcsNodeDtoList',
        'expireTime'     => 'ExpireTime',
        'instanceConf'   => 'InstanceConf',
        'instanceId'     => 'InstanceId',
        'instanceName'   => 'InstanceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->ecsNodeDtoList) {
            $res['EcsNodeDtoList'] = [];
            if (null !== $this->ecsNodeDtoList && \is_array($this->ecsNodeDtoList)) {
                $n = 0;
                foreach ($this->ecsNodeDtoList as $item) {
                    $res['EcsNodeDtoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->instanceConf) {
            $res['InstanceConf'] = $this->instanceConf;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EcsNodeDtoList'])) {
            if (!empty($map['EcsNodeDtoList'])) {
                $model->ecsNodeDtoList = [];
                $n                     = 0;
                foreach ($map['EcsNodeDtoList'] as $item) {
                    $model->ecsNodeDtoList[$n++] = null !== $item ? ecsNodeDtoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['InstanceConf'])) {
            $model->instanceConf = $map['InstanceConf'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        return $model;
    }
}
