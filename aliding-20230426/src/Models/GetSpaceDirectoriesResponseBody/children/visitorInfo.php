<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetSpaceDirectoriesResponseBody\children;

use AlibabaCloud\Dara\Model;

class visitorInfo extends Model
{
    /**
     * @var string[]
     */
    public $dentryActions;
    /**
     * @var string
     */
    public $roleCode;
    /**
     * @var string[]
     */
    public $spaceActions;
    protected $_name = [
        'dentryActions' => 'DentryActions',
        'roleCode'      => 'RoleCode',
        'spaceActions'  => 'SpaceActions',
    ];

    public function validate()
    {
        if (\is_array($this->dentryActions)) {
            Model::validateArray($this->dentryActions);
        }
        if (\is_array($this->spaceActions)) {
            Model::validateArray($this->spaceActions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dentryActions) {
            if (\is_array($this->dentryActions)) {
                $res['DentryActions'] = [];
                $n1                   = 0;
                foreach ($this->dentryActions as $item1) {
                    $res['DentryActions'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->roleCode) {
            $res['RoleCode'] = $this->roleCode;
        }

        if (null !== $this->spaceActions) {
            if (\is_array($this->spaceActions)) {
                $res['SpaceActions'] = [];
                $n1                  = 0;
                foreach ($this->spaceActions as $item1) {
                    $res['SpaceActions'][$n1++] = $item1;
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
        if (isset($map['DentryActions'])) {
            if (!empty($map['DentryActions'])) {
                $model->dentryActions = [];
                $n1                   = 0;
                foreach ($map['DentryActions'] as $item1) {
                    $model->dentryActions[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RoleCode'])) {
            $model->roleCode = $map['RoleCode'];
        }

        if (isset($map['SpaceActions'])) {
            if (!empty($map['SpaceActions'])) {
                $model->spaceActions = [];
                $n1                  = 0;
                foreach ($map['SpaceActions'] as $item1) {
                    $model->spaceActions[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
