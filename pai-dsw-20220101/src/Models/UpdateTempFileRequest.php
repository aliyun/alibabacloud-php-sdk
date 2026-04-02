<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\Dara\Model;

class UpdateTempFileRequest extends Model
{
    /**
     * @var string
     */
    public $gmtExpiredTime;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'gmtExpiredTime' => 'GmtExpiredTime',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gmtExpiredTime) {
            $res['GmtExpiredTime'] = $this->gmtExpiredTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtExpiredTime'])) {
            $model->gmtExpiredTime = $map['GmtExpiredTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
