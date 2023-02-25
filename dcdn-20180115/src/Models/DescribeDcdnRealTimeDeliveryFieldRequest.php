<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnRealTimeDeliveryFieldRequest extends Model
{
    /**
     * @description The type of the collected logs. Default value: cdn_log_access_l1. Valid values:
     *
     *   **cdn_log_access_l1**: access logs of L1 Dynamic Route for CDN (DCDN) nodes
     *   **cdn_log_origin**: back-to-origin logs
     *   **cdn_log_er**: EdgeRoutine logs
     *
     * @example cdn_log_access_l1
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
     * @return DescribeDcdnRealTimeDeliveryFieldRequest
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
