<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class SignalTarget extends Model
{
    /**
     * @var string[]
     */
    public $podNames;

    /**
     * @var string[]
     */
    public $roles;

    /**
     * @var string
     */
    public $scope;
    protected $_name = [
        'podNames' => 'PodNames',
        'roles' => 'Roles',
        'scope' => 'Scope',
    ];

    public function validate()
    {
        if (\is_array($this->podNames)) {
            Model::validateArray($this->podNames);
        }
        if (\is_array($this->roles)) {
            Model::validateArray($this->roles);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->podNames) {
            if (\is_array($this->podNames)) {
                $res['PodNames'] = [];
                $n1 = 0;
                foreach ($this->podNames as $item1) {
                    $res['PodNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->roles) {
            if (\is_array($this->roles)) {
                $res['Roles'] = [];
                $n1 = 0;
                foreach ($this->roles as $item1) {
                    $res['Roles'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
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
        if (isset($map['PodNames'])) {
            if (!empty($map['PodNames'])) {
                $model->podNames = [];
                $n1 = 0;
                foreach ($map['PodNames'] as $item1) {
                    $model->podNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Roles'])) {
            if (!empty($map['Roles'])) {
                $model->roles = [];
                $n1 = 0;
                foreach ($map['Roles'] as $item1) {
                    $model->roles[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        return $model;
    }
}
