<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Tea\Model;

class GetRoleAclOnObjectRequest extends Model
{
    /**
     * @description The name of the object.
     *
     * This parameter is required.
     * @example tableA
     *
     * @var string
     */
    public $objectName;

    /**
     * @description The type of the object.
     *
     * This parameter is required.
     * @example table
     *
     * @var string
     */
    public $objectType;
    protected $_name = [
        'objectName' => 'objectName',
        'objectType' => 'objectType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->objectName) {
            $res['objectName'] = $this->objectName;
        }
        if (null !== $this->objectType) {
            $res['objectType'] = $this->objectType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRoleAclOnObjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['objectName'])) {
            $model->objectName = $map['objectName'];
        }
        if (isset($map['objectType'])) {
            $model->objectType = $map['objectType'];
        }

        return $model;
    }
}
