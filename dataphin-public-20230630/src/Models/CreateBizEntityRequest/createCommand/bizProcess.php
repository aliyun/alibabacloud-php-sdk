<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateBizEntityRequest\createCommand;

use AlibabaCloud\Tea\Model;

class bizProcess extends Model
{
    /**
     * @var int[]
     */
    public $bizEventEntityIdList;

    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example create_process_name
     *
     * @var string
     */
    public $displayName;

    /**
     * @description This parameter is required.
     *
     * @example create_process_code_name
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
     * @var int[]
     */
    public $preBizProcessIdList;

    /**
     * @var int[]
     */
    public $refBizEntityIdList;

    /**
     * @description This parameter is required.
     *
     * @example BIZ_EVENT
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'bizEventEntityIdList' => 'BizEventEntityIdList',
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'name' => 'Name',
        'ownerUserId' => 'OwnerUserId',
        'preBizProcessIdList' => 'PreBizProcessIdList',
        'refBizEntityIdList' => 'RefBizEntityIdList',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizEventEntityIdList) {
            $res['BizEventEntityIdList'] = $this->bizEventEntityIdList;
        }
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
        if (null !== $this->preBizProcessIdList) {
            $res['PreBizProcessIdList'] = $this->preBizProcessIdList;
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
     * @return bizProcess
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizEventEntityIdList'])) {
            if (!empty($map['BizEventEntityIdList'])) {
                $model->bizEventEntityIdList = $map['BizEventEntityIdList'];
            }
        }
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
        if (isset($map['PreBizProcessIdList'])) {
            if (!empty($map['PreBizProcessIdList'])) {
                $model->preBizProcessIdList = $map['PreBizProcessIdList'];
            }
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
