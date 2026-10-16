<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetIdentityProviderSyncScopeResponseBody;

use AlibabaCloud\Dara\Model;

class syncScope extends Model
{
    /**
     * @var string[]
     */
    public $departmentIds;

    /**
     * @var string
     */
    public $mode;
    protected $_name = [
        'departmentIds' => 'DepartmentIds',
        'mode' => 'Mode',
    ];

    public function validate()
    {
        if (\is_array($this->departmentIds)) {
            Model::validateArray($this->departmentIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->departmentIds) {
            if (\is_array($this->departmentIds)) {
                $res['DepartmentIds'] = [];
                $n1 = 0;
                foreach ($this->departmentIds as $item1) {
                    $res['DepartmentIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
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
        if (isset($map['DepartmentIds'])) {
            if (!empty($map['DepartmentIds'])) {
                $model->departmentIds = [];
                $n1 = 0;
                foreach ($map['DepartmentIds'] as $item1) {
                    $model->departmentIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        return $model;
    }
}
