<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\GetClusterInspectReportDetailResponseBody;

use AlibabaCloud\Tea\Model;

class summary extends Model
{
    /**
     * @description The number of check items whose inspection result is advice.
     *
     * @example 0
     *
     * @var int
     */
    public $adviceCount;

    /**
     * @description Check the status code of the inspection task.
     *
     * @example warning
     *
     * @var string
     */
    public $code;

    /**
     * @description The number of check items whose inspection result is error.
     *
     * @example 0
     *
     * @var int
     */
    public $errorCount;

    /**
     * @description The number of check items whose inspection result is normal.
     *
     * @example 10
     *
     * @var int
     */
    public $normalCount;

    /**
     * @description The number of check items whose inspection result is warning.
     *
     * @example 1
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
