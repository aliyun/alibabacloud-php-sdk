<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetWafFilterResponseBody\filter\fields\logics;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\WafQuotaInteger;

class validator extends Model
{
    /**
     * @var string
     */
    public $errMsg;

    /**
     * @var WafQuotaInteger
     */
    public $length;

    /**
     * @var string
     */
    public $pattern;

    /**
     * @var WafQuotaInteger
     */
    public $range;
    protected $_name = [
        'errMsg' => 'ErrMsg',
        'length' => 'Length',
        'pattern' => 'Pattern',
        'range' => 'Range',
    ];

    public function validate()
    {
        if (null !== $this->length) {
            $this->length->validate();
        }
        if (null !== $this->range) {
            $this->range->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errMsg) {
            $res['ErrMsg'] = $this->errMsg;
        }

        if (null !== $this->length) {
            $res['Length'] = null !== $this->length ? $this->length->toArray($noStream) : $this->length;
        }

        if (null !== $this->pattern) {
            $res['Pattern'] = $this->pattern;
        }

        if (null !== $this->range) {
            $res['Range'] = null !== $this->range ? $this->range->toArray($noStream) : $this->range;
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
        if (isset($map['ErrMsg'])) {
            $model->errMsg = $map['ErrMsg'];
        }

        if (isset($map['Length'])) {
            $model->length = WafQuotaInteger::fromMap($map['Length']);
        }

        if (isset($map['Pattern'])) {
            $model->pattern = $map['Pattern'];
        }

        if (isset($map['Range'])) {
            $model->range = WafQuotaInteger::fromMap($map['Range']);
        }

        return $model;
    }
}
