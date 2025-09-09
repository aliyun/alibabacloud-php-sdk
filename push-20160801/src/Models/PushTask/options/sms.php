<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models\PushTask\options;

use AlibabaCloud\Dara\Model;

class sms extends Model
{
    /**
     * @var int
     */
    public $delaySecs;

    /**
     * @var string
     */
    public $params;

    /**
     * @var string
     */
    public $sendPolicy;

    /**
     * @var string
     */
    public $signName;

    /**
     * @var string
     */
    public $templateName;
    protected $_name = [
        'delaySecs' => 'DelaySecs',
        'params' => 'Params',
        'sendPolicy' => 'SendPolicy',
        'signName' => 'SignName',
        'templateName' => 'TemplateName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->delaySecs) {
            $res['DelaySecs'] = $this->delaySecs;
        }

        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }

        if (null !== $this->sendPolicy) {
            $res['SendPolicy'] = $this->sendPolicy;
        }

        if (null !== $this->signName) {
            $res['SignName'] = $this->signName;
        }

        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
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
        if (isset($map['DelaySecs'])) {
            $model->delaySecs = $map['DelaySecs'];
        }

        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }

        if (isset($map['SendPolicy'])) {
            $model->sendPolicy = $map['SendPolicy'];
        }

        if (isset($map['SignName'])) {
            $model->signName = $map['SignName'];
        }

        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}
