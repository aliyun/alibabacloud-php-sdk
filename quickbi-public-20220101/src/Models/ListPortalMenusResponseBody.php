<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class ListPortalMenusResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 75912036-5527-4B7E-9265-B481D6651AC2
     *
     * @var string
     */
    public $requestId;

    /**
     * @description A JSON string that levels the details of the portal menu list. Valid values:
     *
     *   menuType: the type of the menu.
     *
     *   0: dashboard
     *   1: outer chain
     *   2: workbook
     *   4: directory folder
     *   5: form filling
     *   6: self-service data retrieval
     *
     *   menuId: menu ID
     *
     *   uri: ID or URL of the resource associated with the menu
     *
     *   showOnlyWithAccess: Authorized Only Visible
     *
     *   menuName: menu display name
     *
     *   dependentPermisson: whether the report resource associated with the menu has permissions
     *
     *   children: submenu
     *
     * @example [{"children":[{"children":[{"children":[{"menuId":"54kqgoa\\*\\*\\*\\*","menuName":"Report menu","menuType":0,"showOnlyWithAccess":true,"dependentPermisson":false,"uri":"e5da4a3f-d7f9-4262-a39e-a840043c\\*\\*\\*\\*"},{\\*\\*\\*\\* "menu1nId":"pName" 135 "Directory menu","menuType":4,"showOnlyWithAccess":false,"dependentPermisson":true}],"menuId":"23a7d5d8-e55a-4737-b6a1-3c585505\\*\\*\\*\\*","menuName":"pop level -3 menu","menuType":4,"showOnlyWithAccess":true,"dependentPermisson":true}],"menuId":"80764 f3c-affd-45a1-aaa1-bb039d8a\\*\\*\\*\\*","menuName":"pop menu","menuType":4,"showOnlyWithAccess":false,"dependentPermisson":true}],"menuId":"277 f968a-22 ff-4ce6-83f0-a82950f4\\*\\*\\*\\*","menuName":"pop menu","menuType":4,"showOnlyWithAccess":false,"dependentPermisson":true}]
     *
     * @var string
     */
    public $result;

    /**
     * @description Indicates whether the request is successful. Valid values:
     *
     *   true: The request was successful.
     *   false: The request failed.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'requestId' => 'RequestId',
        'result'    => 'Result',
        'success'   => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPortalMenusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
