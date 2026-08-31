<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateDataAssetsGovernObjectStatusRequest;

use AlibabaCloud\Dara\Model;

class updateCommand extends Model
{
    /**
     * @var bool
     */
    public $alertOwners;

    /**
     * @var int[]
     */
    public $governObjectIds;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $targetStatus;
    protected $_name = [
        'alertOwners' => 'AlertOwners',
        'governObjectIds' => 'GovernObjectIds',
        'remark' => 'Remark',
        'targetStatus' => 'TargetStatus',
    ];

    public function validate()
    {
        if (\is_array($this->governObjectIds)) {
            Model::validateArray($this->governObjectIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertOwners) {
            $res['AlertOwners'] = $this->alertOwners;
        }

        if (null !== $this->governObjectIds) {
            if (\is_array($this->governObjectIds)) {
                $res['GovernObjectIds'] = [];
                $n1 = 0;
                foreach ($this->governObjectIds as $item1) {
                    $res['GovernObjectIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->targetStatus) {
            $res['TargetStatus'] = $this->targetStatus;
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
        if (isset($map['AlertOwners'])) {
            $model->alertOwners = $map['AlertOwners'];
        }

        if (isset($map['GovernObjectIds'])) {
            if (!empty($map['GovernObjectIds'])) {
                $model->governObjectIds = [];
                $n1 = 0;
                foreach ($map['GovernObjectIds'] as $item1) {
                    $model->governObjectIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['TargetStatus'])) {
            $model->targetStatus = $map['TargetStatus'];
        }

        return $model;
    }
}
