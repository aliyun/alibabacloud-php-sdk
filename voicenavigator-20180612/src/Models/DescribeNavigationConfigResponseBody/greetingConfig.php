<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\DescribeNavigationConfigResponseBody;

use AlibabaCloud\Dara\Model;

class greetingConfig extends Model
{
    /**
     * @var string
     */
    public $greetingWords;
    /**
     * @var string
     */
    public $intentTrigger;
    /**
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'greetingWords' => 'GreetingWords',
        'intentTrigger' => 'IntentTrigger',
        'sourceType'    => 'SourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->greetingWords) {
            $res['GreetingWords'] = $this->greetingWords;
        }

        if (null !== $this->intentTrigger) {
            $res['IntentTrigger'] = $this->intentTrigger;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
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
        if (isset($map['GreetingWords'])) {
            $model->greetingWords = $map['GreetingWords'];
        }

        if (isset($map['IntentTrigger'])) {
            $model->intentTrigger = $map['IntentTrigger'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
