<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\GetStackDeploymentsResponseBody\deployments;

use AlibabaCloud\Dara\Model;

class config extends Model
{
    /**
     * @var bool
     */
    public $autoApply;

    /**
     * @var bool
     */
    public $isDestroy;
    protected $_name = [
        'autoApply' => 'autoApply',
        'isDestroy' => 'isDestroy',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoApply) {
            $res['autoApply'] = $this->autoApply;
        }

        if (null !== $this->isDestroy) {
            $res['isDestroy'] = $this->isDestroy;
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
        if (isset($map['autoApply'])) {
            $model->autoApply = $map['autoApply'];
        }

        if (isset($map['isDestroy'])) {
            $model->isDestroy = $map['isDestroy'];
        }

        return $model;
    }
}
