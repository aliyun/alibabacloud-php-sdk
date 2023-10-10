<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo;

use AlibabaCloud\Tea\Model;

class trafficControl extends Model
{
    /**
     * @description The route forwarding policy.
     *
     * @example [{"app":"9c8247da-91b6-42bb-8f99-92a0b9c6f****","type":"GROUP"}]
     *
     * @var string
     */
    public $routes;

    /**
     * @description The traffic routing rules.
     *
     * @example [{"conditionType":"content","conditions":[{"key":"name","operator":"EQ","strategy":"PARAM","values":["jim"]},{"key":"name","operator":"EQ","strategy":"COOKIE","values":["jim"]}],"percent":100,"protocol":"SPRINGCLOUD","triggerPolicy":"AND"}]
     *
     * @var string
     */
    public $rules;

    /**
     * @description The description of throttling rules.
     *
     * @example This canary release batch is complete, and the user has confirmed to proceed to the next batch.
     *
     * @var string
     */
    public $tips;
    protected $_name = [
        'routes' => 'Routes',
        'rules'  => 'Rules',
        'tips'   => 'Tips',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->routes) {
            $res['Routes'] = $this->routes;
        }
        if (null !== $this->rules) {
            $res['Rules'] = $this->rules;
        }
        if (null !== $this->tips) {
            $res['Tips'] = $this->tips;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trafficControl
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Routes'])) {
            $model->routes = $map['Routes'];
        }
        if (isset($map['Rules'])) {
            $model->rules = $map['Rules'];
        }
        if (isset($map['Tips'])) {
            $model->tips = $map['Tips'];
        }

        return $model;
    }
}
