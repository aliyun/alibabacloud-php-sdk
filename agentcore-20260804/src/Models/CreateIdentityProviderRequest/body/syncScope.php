<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateIdentityProviderRequest\body;

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
        'departmentIds' => 'departmentIds',
        'mode' => 'mode',
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
                $res['departmentIds'] = [];
                $n1 = 0;
                foreach ($this->departmentIds as $item1) {
                    $res['departmentIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
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
        if (isset($map['departmentIds'])) {
            if (!empty($map['departmentIds'])) {
                $model->departmentIds = [];
                $n1 = 0;
                foreach ($map['departmentIds'] as $item1) {
                    $model->departmentIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['mode'])) {
            $model->mode = $map['mode'];
        }

        return $model;
    }
}
