<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertRulesResponseBody\pageBean\alertRules;

use AlibabaCloud\Dara\Model;

class alarmContext extends Model
{
    /**
     * @var string
     */
    public $alarmContentSubTitle;
    /**
     * @var string
     */
    public $alarmContentTemplate;
    /**
     * @var string
     */
    public $content;
    /**
     * @var string
     */
    public $subTitle;
    protected $_name = [
        'alarmContentSubTitle' => 'AlarmContentSubTitle',
        'alarmContentTemplate' => 'AlarmContentTemplate',
        'content'              => 'Content',
        'subTitle'             => 'SubTitle',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alarmContentSubTitle) {
            $res['AlarmContentSubTitle'] = $this->alarmContentSubTitle;
        }

        if (null !== $this->alarmContentTemplate) {
            $res['AlarmContentTemplate'] = $this->alarmContentTemplate;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->subTitle) {
            $res['SubTitle'] = $this->subTitle;
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
        if (isset($map['AlarmContentSubTitle'])) {
            $model->alarmContentSubTitle = $map['AlarmContentSubTitle'];
        }

        if (isset($map['AlarmContentTemplate'])) {
            $model->alarmContentTemplate = $map['AlarmContentTemplate'];
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['SubTitle'])) {
            $model->subTitle = $map['SubTitle'];
        }

        return $model;
    }
}
