<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\Dara\Model;

class GetApplicationProvisioningScopeResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $groupIds;

    /**
     * @var string[]
     */
    public $organizationalUnitIds;
    protected $_name = [
        'groupIds' => 'groupIds',
        'organizationalUnitIds' => 'organizationalUnitIds',
    ];

    public function validate()
    {
        if (\is_array($this->groupIds)) {
            Model::validateArray($this->groupIds);
        }
        if (\is_array($this->organizationalUnitIds)) {
            Model::validateArray($this->organizationalUnitIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupIds) {
            if (\is_array($this->groupIds)) {
                $res['groupIds'] = [];
                $n1 = 0;
                foreach ($this->groupIds as $item1) {
                    $res['groupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->organizationalUnitIds) {
            if (\is_array($this->organizationalUnitIds)) {
                $res['organizationalUnitIds'] = [];
                $n1 = 0;
                foreach ($this->organizationalUnitIds as $item1) {
                    $res['organizationalUnitIds'][$n1] = $item1;
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
        if (isset($map['groupIds'])) {
            if (!empty($map['groupIds'])) {
                $model->groupIds = [];
                $n1 = 0;
                foreach ($map['groupIds'] as $item1) {
                    $model->groupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['organizationalUnitIds'])) {
            if (!empty($map['organizationalUnitIds'])) {
                $model->organizationalUnitIds = [];
                $n1 = 0;
                foreach ($map['organizationalUnitIds'] as $item1) {
                    $model->organizationalUnitIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
