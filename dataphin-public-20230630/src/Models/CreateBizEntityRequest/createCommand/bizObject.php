<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateBizEntityRequest\createCommand;

use AlibabaCloud\Tea\Model;

class bizObject extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example create_object_name
     *
     * @var string
     */
    public $displayName;

    /**
     * @description This parameter is required.
     *
     * @example create_object_code_name
     *
     * @var string
     */
    public $name;

    /**
     * @example 30010010
     *
     * @var string
     */
    public $ownerUserId;

    /**
     * @example 116306
     *
     * @var int
     */
    public $parentId;

    /**
     * @var int[]
     */
    public $refBizEntityIdList;

    /**
     * @description This parameter is required.
     *
     * @example NORMAL
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'name' => 'Name',
        'ownerUserId' => 'OwnerUserId',
        'parentId' => 'ParentId',
        'refBizEntityIdList' => 'RefBizEntityIdList',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ownerUserId) {
            $res['OwnerUserId'] = $this->ownerUserId;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->refBizEntityIdList) {
            $res['RefBizEntityIdList'] = $this->refBizEntityIdList;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bizObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OwnerUserId'])) {
            $model->ownerUserId = $map['OwnerUserId'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['RefBizEntityIdList'])) {
            if (!empty($map['RefBizEntityIdList'])) {
                $model->refBizEntityIdList = $map['RefBizEntityIdList'];
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
