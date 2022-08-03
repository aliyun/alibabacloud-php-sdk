<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models;

use AlibabaCloud\Tea\Model;

class UpdateResourceShareRequest extends Model
{
    /**
     * @var bool
     */
    public $allowExternalTargets;

    /**
     * @var string
     */
    public $resourceShareId;

    /**
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
