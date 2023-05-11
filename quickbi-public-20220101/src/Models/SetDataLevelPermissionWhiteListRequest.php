<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class SetDataLevelPermissionWhiteListRequest extends Model
{
    /**
     * @description { "ruleType": "ROW_LEVEL", // The row-level permission type. "usersModel": { "userGroups": \[ "0d5fb19b- ***-1248 fc27ca51", // The ID of the user group. "3d2c23d4-***-f6390f325c2d" ], "users": \[ "4334 ***358", // Quick BI the UserID of the user. "Huang***3fa822" ] }, "cubeId": "7c7223ae-31d1-4d2f-b11f-3c744528014b" }
     *
     * @example {"ruleType":"ROW_LEVEL","usersModel":{"userGroups":["26edcb76-****-bdbab78267cb","187e6dd5-1611-4cf7-a034-1a93bd5fecf9"],"users":["4334***358","Huang***3fa822"]},"cubeId":"7c7223ae-****44528014b"}
     *
     * @var string
     */
    public $whiteListModel;
    protected $_name = [
        'whiteListModel' => 'WhiteListModel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->whiteListModel) {
            $res['WhiteListModel'] = $this->whiteListModel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetDataLevelPermissionWhiteListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WhiteListModel'])) {
            $model->whiteListModel = $map['WhiteListModel'];
        }

        return $model;
    }
}
