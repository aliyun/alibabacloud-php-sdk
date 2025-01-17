<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class CreateUserSettingRequest extends Model
{
    /**
     * @var string
     */
    public $alertLevels;
    /**
     * @var int
     */
    public $invalidWarningKeepDays;
    /**
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'alertLevels'            => 'AlertLevels',
        'invalidWarningKeepDays' => 'InvalidWarningKeepDays',
        'sourceIp'               => 'SourceIp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertLevels) {
            $res['AlertLevels'] = $this->alertLevels;
        }

        if (null !== $this->invalidWarningKeepDays) {
            $res['InvalidWarningKeepDays'] = $this->invalidWarningKeepDays;
        }

        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
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
        if (isset($map['AlertLevels'])) {
            $model->alertLevels = $map['AlertLevels'];
        }

        if (isset($map['InvalidWarningKeepDays'])) {
            $model->invalidWarningKeepDays = $map['InvalidWarningKeepDays'];
        }

        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
