<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class CreateResourceResponseBody extends Model
{
    /**
     * @description 资源组所在集群ID
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description 资源组的Owner UID
     *
     * @var string
     */
    public $ownerUid;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 资源组ID
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description 资源组名称
     *
     * @var string
     */
    public $resourceName;
    protected $_name = [
        'clusterId'    => 'ClusterId',
        'ownerUid'     => 'OwnerUid',
        'requestId'    => 'RequestId',
        'resourceId'   => 'ResourceId',
        'resourceName' => 'ResourceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->ownerUid) {
            $res['OwnerUid'] = $this->ownerUid;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateResourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['OwnerUid'])) {
            $model->ownerUid = $map['OwnerUid'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }

        return $model;
    }
}
