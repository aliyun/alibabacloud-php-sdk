<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class StsApplyVO extends Model
{
    /**
     * @var string
     */
    public $aliyunId;

    /**
     * @var int
     */
    public $duration;
    protected $_name = [
        'aliyunId' => 'AliyunId',
        'duration' => 'Duration',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunId) {
            $res['AliyunId'] = $this->aliyunId;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
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
        if (isset($map['AliyunId'])) {
            $model->aliyunId = $map['AliyunId'];
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        return $model;
    }
}
