<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertRulesResponseBody\pageBean\alertRules;

use AlibabaCloud\Tea\Model;

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
    public $subTitle;

    /**
     * @var string
     */
    public $content;
    protected $_name = [
        'alarmContentSubTitle' => 'AlarmContentSubTitle',
        'alarmContentTemplate' => 'AlarmContentTemplate',
        'subTitle'             => 'SubTitle',
        'content'              => 'Content',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmContentSubTitle) {
            $res['AlarmContentSubTitle'] = $this->alarmContentSubTitle;
        }
        if (null !== $this->alarmContentTemplate) {
            $res['AlarmContentTemplate'] = $this->alarmContentTemplate;
        }
        if (null !== $this->subTitle) {
            $res['SubTitle'] = $this->subTitle;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alarmContext
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmContentSubTitle'])) {
            $model->alarmContentSubTitle = $map['AlarmContentSubTitle'];
        }
        if (isset($map['AlarmContentTemplate'])) {
            $model->alarmContentTemplate = $map['AlarmContentTemplate'];
        }
        if (isset($map['SubTitle'])) {
            $model->subTitle = $map['SubTitle'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        return $model;
    }
}
