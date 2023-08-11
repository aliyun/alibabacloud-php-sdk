<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\Tea\Model;

class GetSlsOpenStatusResponseBody extends Model
{
    /**
     * @example D01666F5-541B-4C78-98A6-D29E02DAAC7C
     *
     * @var string
     */
    public $requestId;

    /**
     * @description All Alibaba Cloud API operations must include common request parameters. For more information about common request parameters, see [Common parameters](~~118841~~).
     *
     * For more information about sample requests, see the **"Examples"** section of this topic.
     * @example true
     *
     * @var bool
     */
    public $slsOpenStatus;
    protected $_name = [
        'requestId'     => 'RequestId',
        'slsOpenStatus' => 'SlsOpenStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->slsOpenStatus) {
            $res['SlsOpenStatus'] = $this->slsOpenStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSlsOpenStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SlsOpenStatus'])) {
            $model->slsOpenStatus = $map['SlsOpenStatus'];
        }

        return $model;
    }
}
