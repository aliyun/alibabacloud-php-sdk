<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models\GetPolicyInfoResponseBody;

use AlibabaCloud\Dara\Model;

class sensitiveConfigList extends Model
{
    /**
     * @var int
     */
    public $actionType;

    /**
     * @var int
     */
    public $inputOutputType;

    /**
     * @var int
     */
    public $isEnabled;

    /**
     * @var string
     */
    public $matchAndReplace;

    /**
     * @var int
     */
    public $sensitiveConfigId;

    /**
     * @var string
     */
    public $sensitiveName;
    protected $_name = [
        'actionType' => 'ActionType',
        'inputOutputType' => 'InputOutputType',
        'isEnabled' => 'IsEnabled',
        'matchAndReplace' => 'MatchAndReplace',
        'sensitiveConfigId' => 'SensitiveConfigId',
        'sensitiveName' => 'SensitiveName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionType) {
            $res['ActionType'] = $this->actionType;
        }

        if (null !== $this->inputOutputType) {
            $res['InputOutputType'] = $this->inputOutputType;
        }

        if (null !== $this->isEnabled) {
            $res['IsEnabled'] = $this->isEnabled;
        }

        if (null !== $this->matchAndReplace) {
            $res['MatchAndReplace'] = $this->matchAndReplace;
        }

        if (null !== $this->sensitiveConfigId) {
            $res['SensitiveConfigId'] = $this->sensitiveConfigId;
        }

        if (null !== $this->sensitiveName) {
            $res['SensitiveName'] = $this->sensitiveName;
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
        if (isset($map['ActionType'])) {
            $model->actionType = $map['ActionType'];
        }

        if (isset($map['InputOutputType'])) {
            $model->inputOutputType = $map['InputOutputType'];
        }

        if (isset($map['IsEnabled'])) {
            $model->isEnabled = $map['IsEnabled'];
        }

        if (isset($map['MatchAndReplace'])) {
            $model->matchAndReplace = $map['MatchAndReplace'];
        }

        if (isset($map['SensitiveConfigId'])) {
            $model->sensitiveConfigId = $map['SensitiveConfigId'];
        }

        if (isset($map['SensitiveName'])) {
            $model->sensitiveName = $map['SensitiveName'];
        }

        return $model;
    }
}
