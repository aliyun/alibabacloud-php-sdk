<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyDingTalkStatusRequest extends Model
{
    /**
     * @description The notification IDs of DingTalk chatbots. Separate multiple IDs with commas (,).
     *
     * This parameter is required.
     * @example 2259
     *
     * @var string
     */
    public $ids;

    /**
     * @description The notification status of a DingTalk chatbot. Valid values:
     *
     *   **0**: disabled
     *   **1**: enabled
     *
     * This parameter is required.
     * @example 0
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'ids'    => 'Ids',
        'status' => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ids) {
            $res['Ids'] = $this->ids;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDingTalkStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ids'])) {
            $model->ids = $map['Ids'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
