<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class IgnoreIdcProbeScanResultRequest extends Model
{
    /**
     * @description The operation that you want to perform. Valid values:
     *
     *   **1**: adds the scan result to the whitelist.
     *   **2**: ignores the scan result.
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $ignoreAction;

    /**
     * @description The ID of the scan result. Separate multiple IDs with commas (,).
     *
     * >  You can call the [DescribeIdcProbeScanResultList](~~DescribeIdcProbeScanResultList~~) operation to query the ID.
     *
     * This parameter is required.
     *
     * @example 332098932,332098964,332098963
     *
     * @var string
     */
    public $scanResultIds;
    protected $_name = [
        'ignoreAction' => 'IgnoreAction',
        'scanResultIds' => 'ScanResultIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ignoreAction) {
            $res['IgnoreAction'] = $this->ignoreAction;
        }
        if (null !== $this->scanResultIds) {
            $res['ScanResultIds'] = $this->scanResultIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IgnoreIdcProbeScanResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IgnoreAction'])) {
            $model->ignoreAction = $map['IgnoreAction'];
        }
        if (isset($map['ScanResultIds'])) {
            $model->scanResultIds = $map['ScanResultIds'];
        }

        return $model;
    }
}
