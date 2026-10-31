<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ApplyResourcePermissionRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ApplyResourcePermissionRequest\applyCommand\grantToUsers;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ApplyResourcePermissionRequest\applyCommand\resourceList;

class applyCommand extends Model
{
    /**
     * @var grantToUsers[]
     */
    public $grantToUsers;

    /**
     * @var string
     */
    public $granularity;

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
    protected $_name = [
        'grantToUsers' => 'GrantToUsers',
        'granularity' => 'Granularity',
        'operateList' => 'OperateList',
        'reason' => 'Reason',
        'resourceList' => 'ResourceList',
        'resourceType' => 'ResourceType',
    ];

    public function validate()
    {
        if (\is_array($this->grantToUsers)) {
            Model::validateArray($this->grantToUsers);
        }
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
        if (null !== $this->grantToUsers) {
            if (\is_array($this->grantToUsers)) {
                $res['GrantToUsers'] = [];
                $n1 = 0;
                foreach ($this->grantToUsers as $item1) {
                    $res['GrantToUsers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->granularity) {
            $res['Granularity'] = $this->granularity;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GrantToUsers'])) {
            if (!empty($map['GrantToUsers'])) {
                $model->grantToUsers = [];
                $n1 = 0;
                foreach ($map['GrantToUsers'] as $item1) {
                    $model->grantToUsers[$n1] = grantToUsers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Granularity'])) {
            $model->granularity = $map['Granularity'];
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

        return $model;
    }
}
