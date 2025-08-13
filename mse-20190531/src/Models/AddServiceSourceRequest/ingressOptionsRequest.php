<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\AddServiceSourceRequest;

use AlibabaCloud\Dara\Model;

class ingressOptionsRequest extends Model
{
    /**
     * @var bool
     */
    public $enableIngress;

    /**
     * @var bool
     */
    public $enableStatus;

    /**
     * @var string
     */
    public $ingressClass;

    /**
     * @var string
     */
    public $watchNamespace;
    protected $_name = [
        'enableIngress' => 'EnableIngress',
        'enableStatus' => 'EnableStatus',
        'ingressClass' => 'IngressClass',
        'watchNamespace' => 'WatchNamespace',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableIngress) {
            $res['EnableIngress'] = $this->enableIngress;
        }

        if (null !== $this->enableStatus) {
            $res['EnableStatus'] = $this->enableStatus;
        }

        if (null !== $this->ingressClass) {
            $res['IngressClass'] = $this->ingressClass;
        }

        if (null !== $this->watchNamespace) {
            $res['WatchNamespace'] = $this->watchNamespace;
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
        if (isset($map['EnableIngress'])) {
            $model->enableIngress = $map['EnableIngress'];
        }

        if (isset($map['EnableStatus'])) {
            $model->enableStatus = $map['EnableStatus'];
        }

        if (isset($map['IngressClass'])) {
            $model->ingressClass = $map['IngressClass'];
        }

        if (isset($map['WatchNamespace'])) {
            $model->watchNamespace = $map['WatchNamespace'];
        }

        return $model;
    }
}
