<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertRulesResponseBody\pageBean\alertRules;

use AlibabaCloud\Tea\Model;

class alarmContext extends Model
{
    /**
     * @example TestSubTitle
     *
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
     * @example test
     *
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
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->subTitle) {
            $res['SubTitle'] = $this->subTitle;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['SubTitle'])) {
            $model->subTitle = $map['SubTitle'];
        }

        return $model;
    }
}
