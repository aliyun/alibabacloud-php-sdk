<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListIngressesResponseBody\data\ingressList\rules;

use AlibabaCloud\Tea\Model;

class ruleActions extends Model
{
    /**
     * @var string
     */
    public $actionConfig;

    /**
     * @var string
     */
    public $actionType;
    protected $_name = [
        'actionConfig' => 'ActionConfig',
        'actionType'   => 'ActionType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionConfig) {
            $res['ActionConfig'] = $this->actionConfig;
        }
        if (null !== $this->actionType) {
            $res['ActionType'] = $this->actionType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleActions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionConfig'])) {
            $model->actionConfig = $map['ActionConfig'];
        }
        if (isset($map['ActionType'])) {
            $model->actionType = $map['ActionType'];
        }

        return $model;
    }
}
