<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models;

use AlibabaCloud\Tea\Model;

class DescribeImageResultExtRequest extends Model
{
    /**
     * @example customImage,textInImage
     *
     * @var string
     */
    public $infoType;

    /**
     * @example 638EDDC65C82AB39319A9F60
     *
     * @var string
     */
    public $reqId;
    protected $_name = [
        'infoType' => 'InfoType',
        'reqId'    => 'ReqId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DescribeImageResultExtRequest
     */
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
