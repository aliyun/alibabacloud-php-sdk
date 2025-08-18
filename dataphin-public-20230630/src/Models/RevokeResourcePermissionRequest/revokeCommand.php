<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\RevokeResourcePermissionRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\RevokeResourcePermissionRequest\revokeCommand\resourceList;

class revokeCommand extends Model
{
    /**
     * @var string[]
     */
    public $operateList;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var resourceList[]
     */
    public $resourceList;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'operateList' => 'OperateList',
        'reason' => 'Reason',
        'resourceList' => 'ResourceList',
        'resourceType' => 'ResourceType',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        if (\is_array($this->operateList)) {
            Model::validateArray($this->operateList);
        }
        if (\is_array($this->resourceList)) {
            Model::validateArray($this->resourceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->operateList) {
            if (\is_array($this->operateList)) {
                $res['OperateList'] = [];
                $n1 = 0;
                foreach ($this->operateList as $item1) {
                    $res['OperateList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->resourceList) {
            if (\is_array($this->resourceList)) {
                $res['ResourceList'] = [];
                $n1 = 0;
                foreach ($this->resourceList as $item1) {
                    $res['ResourceList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['OperateList'])) {
            if (!empty($map['OperateList'])) {
                $model->operateList = [];
                $n1 = 0;
                foreach ($map['OperateList'] as $item1) {
                    $model->operateList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['ResourceList'])) {
            if (!empty($map['ResourceList'])) {
                $model->resourceList = [];
                $n1 = 0;
                foreach ($map['ResourceList'] as $item1) {
                    $model->resourceList[$n1] = resourceList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
