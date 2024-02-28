<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListTargetsResponseBody\data;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListTargetsResponseBody\data\targets\paramList;
use AlibabaCloud\Tea\Model;

class targets extends Model
{
    /**
     * @description The endpoint of the event target.
     *
     * @example acs:fc:cn-hangzhou:123456789098****:services/guide.LATEST/functions/HelloFC
     *
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $errorsTolerance;

    /**
     * @description The name of the event bus.
     *
     * @example sls-beijing-one1-tf
     *
     * @var string
     */
    public $eventBusName;

    /**
     * @description The ID of the event target.
     *
     * @example 1453
     *
     * @var string
     */
    public $id;

    /**
     * @description The parameters that are configured for the event target.
     *
     * @var paramList[]
     */
    public $paramList;

    /**
     * @description The name of the event rule.
     *
     * @example rule-uKAK2
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The type of the event target. For more information, see [Event target parameters](~~183698~~).
     *
     * @example acs.fc.function
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'endpoint'        => 'Endpoint',
        'errorsTolerance' => 'ErrorsTolerance',
        'eventBusName'    => 'EventBusName',
        'id'              => 'Id',
        'paramList'       => 'ParamList',
        'ruleName'        => 'RuleName',
        'type'            => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->errorsTolerance) {
            $res['ErrorsTolerance'] = $this->errorsTolerance;
        }
        if (null !== $this->eventBusName) {
            $res['EventBusName'] = $this->eventBusName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->paramList) {
            $res['ParamList'] = [];
            if (null !== $this->paramList && \is_array($this->paramList)) {
                $n = 0;
                foreach ($this->paramList as $item) {
                    $res['ParamList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return targets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['ErrorsTolerance'])) {
            $model->errorsTolerance = $map['ErrorsTolerance'];
        }
        if (isset($map['EventBusName'])) {
            $model->eventBusName = $map['EventBusName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ParamList'])) {
            if (!empty($map['ParamList'])) {
                $model->paramList = [];
                $n                = 0;
                foreach ($map['ParamList'] as $item) {
                    $model->paramList[$n++] = null !== $item ? paramList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
