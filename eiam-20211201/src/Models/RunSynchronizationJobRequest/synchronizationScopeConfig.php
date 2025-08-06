<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\RunSynchronizationJobRequest;

use AlibabaCloud\Dara\Model;

class synchronizationScopeConfig extends Model
{
    /**
     * @var string[]
     */
    public $groupIds;

    /**
     * @var string[]
     */
    public $organizationalUnitIds;

    /**
     * @var string[]
     */
    public $userIds;
    protected $_name = [
        'groupIds' => 'GroupIds',
        'organizationalUnitIds' => 'OrganizationalUnitIds',
        'userIds' => 'UserIds',
    ];

    public function validate()
    {
        if (\is_array($this->groupIds)) {
            Model::validateArray($this->groupIds);
        }
        if (\is_array($this->organizationalUnitIds)) {
            Model::validateArray($this->organizationalUnitIds);
        }
        if (\is_array($this->userIds)) {
            Model::validateArray($this->userIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupIds) {
            if (\is_array($this->groupIds)) {
                $res['GroupIds'] = [];
                $n1 = 0;
                foreach ($this->groupIds as $item1) {
                    $res['GroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->organizationalUnitIds) {
            if (\is_array($this->organizationalUnitIds)) {
                $res['OrganizationalUnitIds'] = [];
                $n1 = 0;
                foreach ($this->organizationalUnitIds as $item1) {
                    $res['OrganizationalUnitIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->userIds) {
            if (\is_array($this->userIds)) {
                $res['UserIds'] = [];
                $n1 = 0;
                foreach ($this->userIds as $item1) {
                    $res['UserIds'][$n1] = $item1;
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
        if (isset($map['GroupIds'])) {
            if (!empty($map['GroupIds'])) {
                $model->groupIds = [];
                $n1 = 0;
                foreach ($map['GroupIds'] as $item1) {
                    $model->groupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['OrganizationalUnitIds'])) {
            if (!empty($map['OrganizationalUnitIds'])) {
                $model->organizationalUnitIds = [];
                $n1 = 0;
                foreach ($map['OrganizationalUnitIds'] as $item1) {
                    $model->organizationalUnitIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['UserIds'])) {
            if (!empty($map['UserIds'])) {
                $model->userIds = [];
                $n1 = 0;
                foreach ($map['UserIds'] as $item1) {
                    $model->userIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
