<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListResourceSharesResponseBody;

use AlibabaCloud\Tea\Model;

class resourceShares extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $allowExternalTargets;

    /**
     * @description The status of the resource share. Valid values:
     *
     *   Active: The resource share is enabled.
     *   Pending: The resource share is associated with one or more resource sharing invitations that are waiting for confirmation.
     *   Deleting: The resource share is being deleted.
     *   Deleted: The resource share is deleted.
     *
     * >  The system deletes the records of resource shares in the Deleted state within 48 hours to 96 hours after you delete the resource shares.
     * @example 2020-12-03T02:20:31.292Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Indicates whether resources in the resource share can be shared with accounts outside the resource directory. Valid values:
     *
     *   false: Resources in the resource share can be shared only with accounts in the resource directory.
     *   true: Resources in the resource share can be shared with both accounts in the resource directory and accounts outside the resource directory.
     *
     * @example rs-PqysnzIj****
     *
     * @var string
     */
    public $resourceShareId;

    /**
     * @description The time when the resource share was created.
     *
     * @example test
     *
     * @var string
     */
    public $resourceShareName;

    /**
     * @description The ID of the resource share.
     *
     * @example 151266687691****
     *
     * @var string
     */
    public $resourceShareOwner;

    /**
     * @example Active
     *
     * @var string
     */
    public $resourceShareStatus;

    /**
     * @description The owner of the resource share.
     *
     * @example 2020-12-03T08:01:43.638Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'allowExternalTargets' => 'AllowExternalTargets',
        'createTime'           => 'CreateTime',
        'resourceShareId'      => 'ResourceShareId',
        'resourceShareName'    => 'ResourceShareName',
        'resourceShareOwner'   => 'ResourceShareOwner',
        'resourceShareStatus'  => 'ResourceShareStatus',
        'updateTime'           => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowExternalTargets) {
            $res['AllowExternalTargets'] = $this->allowExternalTargets;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->resourceShareId) {
            $res['ResourceShareId'] = $this->resourceShareId;
        }
        if (null !== $this->resourceShareName) {
            $res['ResourceShareName'] = $this->resourceShareName;
        }
        if (null !== $this->resourceShareOwner) {
            $res['ResourceShareOwner'] = $this->resourceShareOwner;
        }
        if (null !== $this->resourceShareStatus) {
            $res['ResourceShareStatus'] = $this->resourceShareStatus;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceShares
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowExternalTargets'])) {
            $model->allowExternalTargets = $map['AllowExternalTargets'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ResourceShareId'])) {
            $model->resourceShareId = $map['ResourceShareId'];
        }
        if (isset($map['ResourceShareName'])) {
            $model->resourceShareName = $map['ResourceShareName'];
        }
        if (isset($map['ResourceShareOwner'])) {
            $model->resourceShareOwner = $map['ResourceShareOwner'];
        }
        if (isset($map['ResourceShareStatus'])) {
            $model->resourceShareStatus = $map['ResourceShareStatus'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
