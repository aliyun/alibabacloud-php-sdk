<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class DescribeClusterMetaCollectResponseBody extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $metaStoreType;
    protected $_name = [
        'status'        => 'Status',
        'requestId'     => 'RequestId',
        'clusterId'     => 'ClusterId',
        'metaStoreType' => 'MetaStoreType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->metaStoreType) {
            $res['MetaStoreType'] = $this->metaStoreType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterMetaCollectResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['MetaStoreType'])) {
            $model->metaStoreType = $map['MetaStoreType'];
        }

        return $model;
    }
}
