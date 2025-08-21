<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Dara\Model;

class CreateInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $agentKey;

    /**
     * @var string
     */
    public $introduction;

    /**
     * @var string
     */
    public $languageCode;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $robotType;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'introduction' => 'Introduction',
        'languageCode' => 'LanguageCode',
        'name' => 'Name',
        'robotType' => 'RobotType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }

        if (null !== $this->introduction) {
            $res['Introduction'] = $this->introduction;
        }

        if (null !== $this->languageCode) {
            $res['LanguageCode'] = $this->languageCode;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->robotType) {
            $res['RobotType'] = $this->robotType;
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
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }

        if (isset($map['Introduction'])) {
            $model->introduction = $map['Introduction'];
        }

        if (isset($map['LanguageCode'])) {
            $model->languageCode = $map['LanguageCode'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RobotType'])) {
            $model->robotType = $map['RobotType'];
        }

        return $model;
    }
}
