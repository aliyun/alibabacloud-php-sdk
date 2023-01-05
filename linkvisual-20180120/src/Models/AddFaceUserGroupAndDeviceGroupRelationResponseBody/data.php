<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\AddFaceUserGroupAndDeviceGroupRelationResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example qcb2yea4ha4dxmly
     *
     * @var string
     */
    public $controlId;

    /**
     * @example 2020-11-20 18:59:01
     *
     * @var string
     */
    public $modifiedTime;
    protected $_name = [
        'controlId'    => 'ControlId',
        'modifiedTime' => 'ModifiedTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->controlId) {
            $res['ControlId'] = $this->controlId;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ControlId'])) {
            $model->controlId = $map['ControlId'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }

        return $model;
    }
}
