<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListServiceSourceResponseBody\data;

use AlibabaCloud\Tea\Model;

class ingressOptions extends Model
{
    /**
     * @description Indicates whether Ingresses are enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $enableIngress;

    /**
     * @description Indicates whether the Ingress gateway status is updated.
     *
     * @example true
     *
     * @var bool
     */
    public $enableStatus;

    /**
     * @description The Ingress class.
     *
     * @example com.test.xxx
     *
     * @var string
     */
    public $ingressClass;

    /**
     * @description The namespace whose resources you want to monitor.
     *
     * @example default
     *
     * @var string
     */
    public $watchNamespace;
    protected $_name = [
        'enableIngress'  => 'EnableIngress',
        'enableStatus'   => 'EnableStatus',
        'ingressClass'   => 'IngressClass',
        'watchNamespace' => 'WatchNamespace',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ingressOptions
     */
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
