<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateWuyingServerRequest\modelConfig;

use AlibabaCloud\Dara\Model;

class serverRunConfig extends Model
{
    /**
     * @var int
     */
    public $maxModelLen;

    /**
     * @var int
     */
    public $maxNumSeqs;

    /**
     * @var string
     */
    public $settingMode;
    protected $_name = [
        'maxModelLen' => 'MaxModelLen',
        'maxNumSeqs' => 'MaxNumSeqs',
        'settingMode' => 'SettingMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxModelLen) {
            $res['MaxModelLen'] = $this->maxModelLen;
        }

        if (null !== $this->maxNumSeqs) {
            $res['MaxNumSeqs'] = $this->maxNumSeqs;
        }

        if (null !== $this->settingMode) {
            $res['SettingMode'] = $this->settingMode;
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
        if (isset($map['MaxModelLen'])) {
            $model->maxModelLen = $map['MaxModelLen'];
        }

        if (isset($map['MaxNumSeqs'])) {
            $model->maxNumSeqs = $map['MaxNumSeqs'];
        }

        if (isset($map['SettingMode'])) {
            $model->settingMode = $map['SettingMode'];
        }

        return $model;
    }
}
