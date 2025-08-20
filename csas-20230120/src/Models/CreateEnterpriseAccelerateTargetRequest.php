<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class CreateEnterpriseAccelerateTargetRequest extends Model
{
    /**
     * @var string
     */
    public $eapId;

    /**
     * @var string[]
     */
    public $target;
    protected $_name = [
        'eapId' => 'EapId',
        'target' => 'Target',
    ];

    public function validate()
    {
        if (\is_array($this->target)) {
            Model::validateArray($this->target);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eapId) {
            $res['EapId'] = $this->eapId;
        }

        if (null !== $this->target) {
            if (\is_array($this->target)) {
                $res['Target'] = [];
                $n1 = 0;
                foreach ($this->target as $item1) {
                    $res['Target'][$n1] = $item1;
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
        if (isset($map['EapId'])) {
            $model->eapId = $map['EapId'];
        }

        if (isset($map['Target'])) {
            if (!empty($map['Target'])) {
                $model->target = [];
                $n1 = 0;
                foreach ($map['Target'] as $item1) {
                    $model->target[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
