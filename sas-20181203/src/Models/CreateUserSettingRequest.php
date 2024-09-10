<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateUserSettingRequest extends Model
{
    /**
     * @description The severities of alerts.
     *
     * @example high,low
     *
     * @var string
     */
    public $alertLevels;

    /**
     * @description The number of days during which you want to retain invalid alerts.
     *
     * @example 7
     *
     * @var int
     */
    public $invalidWarningKeepDays;

    /**
     * @description The source IP address.
     *
     * @example 112.48.16.***
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CreateUserSettingRequest
     */
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
