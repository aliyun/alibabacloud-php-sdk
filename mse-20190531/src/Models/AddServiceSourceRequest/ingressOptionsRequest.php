<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\AddServiceSourceRequest;

use AlibabaCloud\Tea\Model;

class ingressOptionsRequest extends Model
{
    /**
     * @description The group to which the service belongs.
     *
     * @example true
     *
     * @var bool
     */
    public $enableIngress;

    /**
     * @description The language of the response. Valid values:
     *
     *   zh-CN: Chinese. This is the default value.
     *   en-US: English.
     *   ja: Japanese.
     *
     * @example true
     *
     * @var bool
     */
    public $enableStatus;

    /**
     * @description An array of service root paths.
     *
     * @example com.test.xxx
     *
     * @var string
     */
    public $ingressClass;

    /**
     * @description The root path of the service.
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
     * @return ingressOptionsRequest
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
