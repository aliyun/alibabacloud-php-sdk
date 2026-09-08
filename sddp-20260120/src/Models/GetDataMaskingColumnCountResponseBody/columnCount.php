<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20260120\Models\GetDataMaskingColumnCountResponseBody;

use AlibabaCloud\Dara\Model;

class columnCount extends Model
{
    /**
     * @var int
     */
    public $maskedCount;

    /**
     * @var int
     */
    public $maskingFailedCount;

    /**
     * @var int
     */
    public $sensitiveCount;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'maskedCount' => 'MaskedCount',
        'maskingFailedCount' => 'MaskingFailedCount',
        'sensitiveCount' => 'SensitiveCount',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maskedCount) {
            $res['MaskedCount'] = $this->maskedCount;
        }

        if (null !== $this->maskingFailedCount) {
            $res['MaskingFailedCount'] = $this->maskingFailedCount;
        }

        if (null !== $this->sensitiveCount) {
            $res['SensitiveCount'] = $this->sensitiveCount;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['MaskedCount'])) {
            $model->maskedCount = $map['MaskedCount'];
        }

        if (isset($map['MaskingFailedCount'])) {
            $model->maskingFailedCount = $map['MaskingFailedCount'];
        }

        if (isset($map['SensitiveCount'])) {
            $model->sensitiveCount = $map['SensitiveCount'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
