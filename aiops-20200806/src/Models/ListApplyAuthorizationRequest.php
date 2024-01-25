<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class ListApplyAuthorizationRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $permissionType;

    /**
     * @var string
     */
    public $switchFrontOperaUid;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $uid;
    protected $_name = [
        'currentPage'         => 'CurrentPage',
        'pageSize'            => 'PageSize',
        'permissionType'      => 'PermissionType',
        'switchFrontOperaUid' => 'SwitchFrontOperaUid',
        'type'                => 'Type',
        'uid'                 => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->permissionType) {
            $res['PermissionType'] = $this->permissionType;
        }
        if (null !== $this->switchFrontOperaUid) {
            $res['SwitchFrontOperaUid'] = $this->switchFrontOperaUid;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListApplyAuthorizationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PermissionType'])) {
            $model->permissionType = $map['PermissionType'];
        }
        if (isset($map['SwitchFrontOperaUid'])) {
            $model->switchFrontOperaUid = $map['SwitchFrontOperaUid'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
