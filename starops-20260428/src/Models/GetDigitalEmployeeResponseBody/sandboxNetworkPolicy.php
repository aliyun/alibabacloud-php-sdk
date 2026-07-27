<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\STAROps\V20260428\Models\GetDigitalEmployeeResponseBody;

use AlibabaCloud\Dara\Model;

class sandboxNetworkPolicy extends Model
{
    /**
     * @var string[]
     */
    public $allowCidrs;

    /**
     * @var string[]
     */
    public $allowFqdns;

    /**
     * @var bool
     */
    public $enableAcl;
    protected $_name = [
        'allowCidrs' => 'allowCidrs',
        'allowFqdns' => 'allowFqdns',
        'enableAcl' => 'enableAcl',
    ];

    public function validate()
    {
        if (\is_array($this->allowCidrs)) {
            Model::validateArray($this->allowCidrs);
        }
        if (\is_array($this->allowFqdns)) {
            Model::validateArray($this->allowFqdns);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowCidrs) {
            if (\is_array($this->allowCidrs)) {
                $res['allowCidrs'] = [];
                $n1 = 0;
                foreach ($this->allowCidrs as $item1) {
                    $res['allowCidrs'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->allowFqdns) {
            if (\is_array($this->allowFqdns)) {
                $res['allowFqdns'] = [];
                $n1 = 0;
                foreach ($this->allowFqdns as $item1) {
                    $res['allowFqdns'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->enableAcl) {
            $res['enableAcl'] = $this->enableAcl;
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
        if (isset($map['allowCidrs'])) {
            if (!empty($map['allowCidrs'])) {
                $model->allowCidrs = [];
                $n1 = 0;
                foreach ($map['allowCidrs'] as $item1) {
                    $model->allowCidrs[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['allowFqdns'])) {
            if (!empty($map['allowFqdns'])) {
                $model->allowFqdns = [];
                $n1 = 0;
                foreach ($map['allowFqdns'] as $item1) {
                    $model->allowFqdns[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['enableAcl'])) {
            $model->enableAcl = $map['enableAcl'];
        }

        return $model;
    }
}
