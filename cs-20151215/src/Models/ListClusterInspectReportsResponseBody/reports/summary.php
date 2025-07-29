<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ListClusterInspectReportsResponseBody\reports;

use AlibabaCloud\Tea\Model;

class summary extends Model
{
    /**
     * @description The number of items whose result is advice.
     *
     * @example 0
     *
     * @var int
     */
    public $adviceCount;

    /**
     * @description Aggregated inspection task result code.
     *
     * @example warning
     *
     * @var string
     */
    public $code;

    /**
     * @description The number of items whose result is error.
     *
     * @example 0
     *
     * @var int
     */
    public $errorCount;

    /**
     * @description The number of items whose result is normal.
     *
     * @example 1
     *
     * @var int
     */
    public $normalCount;

    /**
     * @description The number of items whose result is warning.
     *
     * @example 0
     *
     * @var int
     */
    public $warnCount;
    protected $_name = [
        'adviceCount' => 'adviceCount',
        'code' => 'code',
        'errorCount' => 'errorCount',
        'normalCount' => 'normalCount',
        'warnCount' => 'warnCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->adviceCount) {
            $res['adviceCount'] = $this->adviceCount;
        }
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->errorCount) {
            $res['errorCount'] = $this->errorCount;
        }
        if (null !== $this->normalCount) {
            $res['normalCount'] = $this->normalCount;
        }
        if (null !== $this->warnCount) {
            $res['warnCount'] = $this->warnCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return summary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['adviceCount'])) {
            $model->adviceCount = $map['adviceCount'];
        }
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['errorCount'])) {
            $model->errorCount = $map['errorCount'];
        }
        if (isset($map['normalCount'])) {
            $model->normalCount = $map['normalCount'];
        }
        if (isset($map['warnCount'])) {
            $model->warnCount = $map['warnCount'];
        }

        return $model;
    }
}
