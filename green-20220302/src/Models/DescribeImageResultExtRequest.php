<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models;

use AlibabaCloud\Dara\Model;

class DescribeImageResultExtRequest extends Model
{
    /**
     * @var string
     */
    public $infoType;
    /**
     * @var string
     */
    public $reqId;
    protected $_name = [
        'infoType' => 'InfoType',
        'reqId'    => 'ReqId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->infoType) {
            $res['InfoType'] = $this->infoType;
        }

        if (null !== $this->reqId) {
            $res['ReqId'] = $this->reqId;
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
        if (isset($map['InfoType'])) {
            $model->infoType = $map['InfoType'];
        }

        if (isset($map['ReqId'])) {
            $model->reqId = $map['ReqId'];
        }

        return $model;
    }
}
