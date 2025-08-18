<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GrantResourcePermissionRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GrantResourcePermissionRequest\grantCommand\resourceList;

class grantCommand extends Model
{
    /**
     * @var string
     */
    public $effectiveEnd;

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
     * @var string[]
     */
    public $userIdList;
    protected $_name = [
        'effectiveEnd' => 'EffectiveEnd',
        'operateList' => 'OperateList',
        'reason' => 'Reason',
        'resourceList' => 'ResourceList',
        'resourceType' => 'ResourceType',
        'userIdList' => 'UserIdList',
    ];

    public function validate()
    {
        if (\is_array($this->operateList)) {
            Model::validateArray($this->operateList);
        }
        if (\is_array($this->resourceList)) {
            Model::validateArray($this->resourceList);
        }
        if (\is_array($this->userIdList)) {
            Model::validateArray($this->userIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->effectiveEnd) {
            $res['EffectiveEnd'] = $this->effectiveEnd;
        }

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

        if (null !== $this->userIdList) {
            if (\is_array($this->userIdList)) {
                $res['UserIdList'] = [];
                $n1 = 0;
                foreach ($this->userIdList as $item1) {
                    $res['UserIdList'][$n1] = $item1;
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
        if (isset($map['EffectiveEnd'])) {
            $model->effectiveEnd = $map['EffectiveEnd'];
        }

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

        if (isset($map['UserIdList'])) {
            if (!empty($map['UserIdList'])) {
                $model->userIdList = [];
                $n1 = 0;
                foreach ($map['UserIdList'] as $item1) {
                    $model->userIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
