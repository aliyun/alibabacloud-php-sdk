<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models;

use AlibabaCloud\Tea\Model;

class CheckCreatedByEnabledResponseBody extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $openStatus;

    /**
     * @example 682DD9E1-F530-5D14-A839-A6787FA82B74
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'openStatus' => 'OpenStatus',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->openStatus) {
            $res['OpenStatus'] = $this->openStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckCreatedByEnabledResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OpenStatus'])) {
            $model->openStatus = $map['OpenStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
