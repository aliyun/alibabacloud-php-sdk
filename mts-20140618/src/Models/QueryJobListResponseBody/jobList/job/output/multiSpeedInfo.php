<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryJobListResponseBody\jobList\job\output;

use AlibabaCloud\Dara\Model;

class multiSpeedInfo extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $downgradePolicy;

    /**
     * @var float
     */
    public $duration;

    /**
     * @var string
     */
    public $enable;

    /**
     * @var string
     */
    public $message;

    /**
     * @var float
     */
    public $realSpeed;

    /**
     * @var int
     */
    public $settingSpeed;

    /**
     * @var float
     */
    public $timeCost;
    protected $_name = [
        'code' => 'Code',
        'downgradePolicy' => 'DowngradePolicy',
        'duration' => 'Duration',
        'enable' => 'Enable',
        'message' => 'Message',
        'realSpeed' => 'RealSpeed',
        'settingSpeed' => 'SettingSpeed',
        'timeCost' => 'TimeCost',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->downgradePolicy) {
            $res['DowngradePolicy'] = $this->downgradePolicy;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->realSpeed) {
            $res['RealSpeed'] = $this->realSpeed;
        }

        if (null !== $this->settingSpeed) {
            $res['SettingSpeed'] = $this->settingSpeed;
        }

        if (null !== $this->timeCost) {
            $res['TimeCost'] = $this->timeCost;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['DowngradePolicy'])) {
            $model->downgradePolicy = $map['DowngradePolicy'];
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['RealSpeed'])) {
            $model->realSpeed = $map['RealSpeed'];
        }

        if (isset($map['SettingSpeed'])) {
            $model->settingSpeed = $map['SettingSpeed'];
        }

        if (isset($map['TimeCost'])) {
            $model->timeCost = $map['TimeCost'];
        }

        return $model;
    }
}
