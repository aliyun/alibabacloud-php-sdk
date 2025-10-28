<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo;

use AlibabaCloud\Dara\Model;

class trafficControl extends Model
{
    /**
     * @var string
     */
    public $routes;

    /**
     * @var string
     */
    public $rules;

    /**
     * @var string
     */
    public $tips;
    protected $_name = [
        'routes' => 'Routes',
        'rules' => 'Rules',
        'tips' => 'Tips',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
