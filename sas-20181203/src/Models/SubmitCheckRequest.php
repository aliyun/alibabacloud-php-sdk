<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class SubmitCheckRequest extends Model
{
    /**
     * @description The check items that are scanned. Valid values:
     *
     *   **FULL**: All check items are scanned.
     *   **POLICY**: Only the check items that are configured are scanned.
     *
     * @example POLICY
     *
     * @var string
     */
    public $scanRange;
    protected $_name = [
        'scanRange' => 'ScanRange',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scanRange) {
            $res['ScanRange'] = $this->scanRange;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitCheckRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ScanRange'])) {
            $model->scanRange = $map['ScanRange'];
        }

        return $model;
    }
}
