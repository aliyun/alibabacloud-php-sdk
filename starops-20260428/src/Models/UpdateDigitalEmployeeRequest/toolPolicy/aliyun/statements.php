<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\STAROps\V20260428\Models\UpdateDigitalEmployeeRequest\toolPolicy\aliyun;

use AlibabaCloud\Dara\Model;

class statements extends Model
{
    /**
     * @var string[]
     */
    public $actions;

    /**
     * @var string
     */
    public $apiVersion;

    /**
     * @var string
     */
    public $decision;

    /**
     * @var string
     */
    public $product;
    protected $_name = [
        'actions' => 'actions',
        'apiVersion' => 'apiVersion',
        'decision' => 'decision',
        'product' => 'product',
    ];

    public function validate()
    {
        if (\is_array($this->actions)) {
            Model::validateArray($this->actions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actions) {
            if (\is_array($this->actions)) {
                $res['actions'] = [];
                $n1 = 0;
                foreach ($this->actions as $item1) {
                    $res['actions'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->apiVersion) {
            $res['apiVersion'] = $this->apiVersion;
        }

        if (null !== $this->decision) {
            $res['decision'] = $this->decision;
        }

        if (null !== $this->product) {
            $res['product'] = $this->product;
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
        if (isset($map['actions'])) {
            if (!empty($map['actions'])) {
                $model->actions = [];
                $n1 = 0;
                foreach ($map['actions'] as $item1) {
                    $model->actions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['apiVersion'])) {
            $model->apiVersion = $map['apiVersion'];
        }

        if (isset($map['decision'])) {
            $model->decision = $map['decision'];
        }

        if (isset($map['product'])) {
            $model->product = $map['product'];
        }

        return $model;
    }
}
