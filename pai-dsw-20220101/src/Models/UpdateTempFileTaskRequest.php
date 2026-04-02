<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\Dara\Model;

class UpdateTempFileTaskRequest extends Model
{
    /**
     * @var string
     */
    public $gmtExpiredTime;
    protected $_name = [
        'gmtExpiredTime' => 'GmtExpiredTime',
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

        return $model;
    }
}
