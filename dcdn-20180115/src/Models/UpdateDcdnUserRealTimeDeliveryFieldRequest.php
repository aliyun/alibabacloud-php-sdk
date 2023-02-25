<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class UpdateDcdnUserRealTimeDeliveryFieldRequest extends Model
{
    /**
     * @description The type of the collected logs. Default value: cdn_log_access_l1. Valid values:
     *
     *   **cdn_log_access_l1**: access logs of L1 Dynamic Route for CDN (DCDN) points of presence (POPs)
     *   **cdn_log_origin**: back-to-origin logs
     *   **cdn_log_er**: EdgeRoutine logs
     *
     * @example cdn_log_access_l1
     *
     * @var string
     */
    public $businessType;

    /**
     * @description The list of fields. Separate multiple fields with commas (,). For more information, see [Fields in a real-time log](~~324199~~).
     *
     * @example body_bytes_sent,client_ip,content_type
     *
     * @var string
     */
    public $fields;
    protected $_name = [
        'businessType' => 'BusinessType',
        'fields'       => 'Fields',
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
        if (null !== $this->fields) {
            $res['Fields'] = $this->fields;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDcdnUserRealTimeDeliveryFieldRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['Fields'])) {
            $model->fields = $map['Fields'];
        }

        return $model;
    }
}
