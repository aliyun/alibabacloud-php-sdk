<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeUserSettingResponseBody extends Model
{
    /**
     * @description The severities of alerts. If this parameter is empty, no custom alerts are generated.
     *
     * @var string[]
     */
    public $alertLevels;

    /**
     * @description The number of days during which you want to retain invalid alerts.
     *
     * @example 30
     *
     * @var int
     */
    public $invalidWarningKeepDays;

    /**
     * @description The request ID.
     *
     * @example 09969D2C-4FAD-429E-BFBF-9A60DEF8****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'alertLevels'            => 'AlertLevels',
        'invalidWarningKeepDays' => 'InvalidWarningKeepDays',
        'requestId'              => 'RequestId',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserSettingResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertLevels'])) {
            if (!empty($map['AlertLevels'])) {
                $model->alertLevels = $map['AlertLevels'];
            }
        }
        if (isset($map['InvalidWarningKeepDays'])) {
            $model->invalidWarningKeepDays = $map['InvalidWarningKeepDays'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
