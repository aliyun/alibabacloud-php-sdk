<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class ModifyDesktopsPolicyGroupRequest extends Model
{
    /**
     * @var string[]
     */
    public $desktopId;
    /**
     * @var string
     */
    public $policyGroupId;
    /**
     * @var string[]
     */
    public $policyGroupIds;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'desktopId'      => 'DesktopId',
        'policyGroupId'  => 'PolicyGroupId',
        'policyGroupIds' => 'PolicyGroupIds',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->desktopId)) {
            Model::validateArray($this->desktopId);
        }
        if (\is_array($this->policyGroupIds)) {
            Model::validateArray($this->policyGroupIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desktopId) {
            if (\is_array($this->desktopId)) {
                $res['DesktopId'] = [];
                $n1               = 0;
                foreach ($this->desktopId as $item1) {
                    $res['DesktopId'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
        }

        if (null !== $this->policyGroupIds) {
            if (\is_array($this->policyGroupIds)) {
                $res['PolicyGroupIds'] = [];
                $n1                    = 0;
                foreach ($this->policyGroupIds as $item1) {
                    $res['PolicyGroupIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['DesktopId'])) {
            if (!empty($map['DesktopId'])) {
                $model->desktopId = [];
                $n1               = 0;
                foreach ($map['DesktopId'] as $item1) {
                    $model->desktopId[$n1++] = $item1;
                }
            }
        }

        if (isset($map['PolicyGroupId'])) {
            $model->policyGroupId = $map['PolicyGroupId'];
        }

        if (isset($map['PolicyGroupIds'])) {
            if (!empty($map['PolicyGroupIds'])) {
                $model->policyGroupIds = [];
                $n1                    = 0;
                foreach ($map['PolicyGroupIds'] as $item1) {
                    $model->policyGroupIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
