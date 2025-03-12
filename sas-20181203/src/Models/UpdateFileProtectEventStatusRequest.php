<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class UpdateFileProtectEventStatusRequest extends Model
{
    /**
     * @description The IDs of the events.
     *
     * @var int[]
     */
    public $id;

    /**
     * @description The handling status of the event. Valid values:
     *
     *   **0**: unhandled
     *   **1**: handled
     *   **2**: added to the whitelist
     *
     * @example 0
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'id'     => 'Id',
        'status' => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateFileProtectEventStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            if (!empty($map['Id'])) {
                $model->id = $map['Id'];
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
