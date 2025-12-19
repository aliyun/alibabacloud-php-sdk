<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class AppOperationAddress extends Model
{
    /**
     * @var AppOperateAction[]
     */
    public $actions;
    protected $_name = [
        'actions' => 'Actions',
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
                $res['Actions'] = [];
                $n1 = 0;
                foreach ($this->actions as $item1) {
                    $res['Actions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Actions'])) {
            if (!empty($map['Actions'])) {
                $model->actions = [];
                $n1 = 0;
                foreach ($map['Actions'] as $item1) {
                    $model->actions[$n1] = AppOperateAction::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
