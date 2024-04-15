<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class UpdateUsersStatusRequest extends Model
{
    /**
     * @var string[]
     */
    public $saseUserIds;

    /**
     * @example Enabled
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'saseUserIds' => 'SaseUserIds',
        'status'      => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->saseUserIds) {
            $res['SaseUserIds'] = $this->saseUserIds;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateUsersStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SaseUserIds'])) {
            if (!empty($map['SaseUserIds'])) {
                $model->saseUserIds = $map['SaseUserIds'];
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
