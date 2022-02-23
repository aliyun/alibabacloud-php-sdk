<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\Tea\Model;

class DescribeListenerAccessControlAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessControlStatus;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sourceItems;
    protected $_name = [
        'accessControlStatus' => 'AccessControlStatus',
        'requestId'           => 'RequestId',
        'sourceItems'         => 'SourceItems',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessControlStatus) {
            $res['AccessControlStatus'] = $this->accessControlStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sourceItems) {
            $res['SourceItems'] = $this->sourceItems;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeListenerAccessControlAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessControlStatus'])) {
            $model->accessControlStatus = $map['AccessControlStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SourceItems'])) {
            $model->sourceItems = $map['SourceItems'];
        }

        return $model;
    }
}
