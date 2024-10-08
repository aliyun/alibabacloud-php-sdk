<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetWafFilterResponseBody\filter\fields\logics;

use AlibabaCloud\SDK\ESA\V20240910\Models\WafQuotaInteger;
use AlibabaCloud\Tea\Model;

class validator extends Model
{
    /**
     * @example Enter a valid expression
     *
     * @var string
     */
    public $errMsg;

    /**
     * @var WafQuotaInteger
     */
    public $length;

    /**
     * @example ^example$
     *
     * @var string
     */
    public $pattern;

    /**
     * @var WafQuotaInteger
     */
    public $range;
    protected $_name = [
        'errMsg'  => 'ErrMsg',
        'length'  => 'Length',
        'pattern' => 'Pattern',
        'range'   => 'Range',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errMsg) {
            $res['ErrMsg'] = $this->errMsg;
        }
        if (null !== $this->length) {
            $res['Length'] = null !== $this->length ? $this->length->toMap() : null;
        }
        if (null !== $this->pattern) {
            $res['Pattern'] = $this->pattern;
        }
        if (null !== $this->range) {
            $res['Range'] = null !== $this->range ? $this->range->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return validator
     */
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
