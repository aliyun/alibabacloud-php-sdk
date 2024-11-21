<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class GetRealtimeDeliveryFieldRequest extends Model
{
    /**
     * @description The log category. Valid values:
     *
     *   **dcdn_log_access_l1** (default): access logs.
     *   **dcdn_log_er**: Edge Routine logs.
     *   **dcdn_log_waf**: firewall logs.
     *   **dcdn_log_ipa**: TCP/UDP proxy logs.
     *
     * This parameter is required.
     * @example dcdn_log_er
     *
     * @var string
     */
    public $businessType;
    protected $_name = [
        'businessType' => 'BusinessType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRealtimeDeliveryFieldRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }

        return $model;
    }
}
