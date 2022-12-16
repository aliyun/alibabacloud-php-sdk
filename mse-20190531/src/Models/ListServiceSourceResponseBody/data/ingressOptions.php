<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListServiceSourceResponseBody\data;

use AlibabaCloud\Tea\Model;

class ingressOptions extends Model
{
    /**
     * @description Alibaba Cloud provides SDKs for multiple programming languages to help you integrate Alibaba Cloud products and services by using APIs. We recommend that you use an SDK to call API operations. This frees you from manual signature verification.
     *
     * @example true
     *
     * @var bool
     */
    public $enableIngress;

    /**
     * @var bool
     */
    public $enableStatus;

    /**
     * @description ingress class
     *
     * @example com.test.xxx
     *
     * @var string
     */
    public $ingressClass;

    /**
     * @description Alibaba Cloud CLI allows you to search for API operations, call and debug API operations online, and dynamically generate executable sample code for SDKs.
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
