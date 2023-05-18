<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models;

use AlibabaCloud\Tea\Model;

class UpdateResourceShareRequest extends Model
{
    /**
     * @description The information of the resource share.
     *
     * @example false
     *
     * @var bool
     */
    public $allowExternalTargets;

    /**
     * @description Specifies whether resources in the resource share can be shared with accounts outside the resource directory. Valid values:
     *
     *   false: Resources in the resource share can be shared only with accounts in the resource directory.
     *   true: Resources in the resource share can be shared with both accounts in the resource directory and accounts outside the resource directory.
     *
     * @example rs-qSkW1HBY****
     *
     * @var string
     */
    public $resourceShareId;

    /**
     * @description The ID of the request.
     *
     * @example new
     *
     * @var string
     */
    public $resourceShareName;
    protected $_name = [
        'allowExternalTargets' => 'AllowExternalTargets',
        'resourceShareId'      => 'ResourceShareId',
        'resourceShareName'    => 'ResourceShareName',
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
        if (null !== $this->resourceShareId) {
            $res['ResourceShareId'] = $this->resourceShareId;
        }
        if (null !== $this->resourceShareName) {
            $res['ResourceShareName'] = $this->resourceShareName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateResourceShareRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowExternalTargets'])) {
            $model->allowExternalTargets = $map['AllowExternalTargets'];
        }
        if (isset($map['ResourceShareId'])) {
            $model->resourceShareId = $map['ResourceShareId'];
        }
        if (isset($map['ResourceShareName'])) {
            $model->resourceShareName = $map['ResourceShareName'];
        }

        return $model;
    }
}
