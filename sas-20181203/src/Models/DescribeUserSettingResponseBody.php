<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeUserSettingResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $alertLevels;

    /**
     * @var int
     */
    public $invalidWarningKeepDays;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'alertLevels' => 'AlertLevels',
        'invalidWarningKeepDays' => 'InvalidWarningKeepDays',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->alertLevels)) {
            Model::validateArray($this->alertLevels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertLevels) {
            if (\is_array($this->alertLevels)) {
                $res['AlertLevels'] = [];
                $n1 = 0;
                foreach ($this->alertLevels as $item1) {
                    $res['AlertLevels'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->invalidWarningKeepDays) {
            $res['InvalidWarningKeepDays'] = $this->invalidWarningKeepDays;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
            if (!empty($map['AlertLevels'])) {
                $model->alertLevels = [];
                $n1 = 0;
                foreach ($map['AlertLevels'] as $item1) {
                    $model->alertLevels[$n1] = $item1;
                    ++$n1;
                }
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
