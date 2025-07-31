<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\OperateInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class instanceStatusList extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @example xx
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example t_132435
     *
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 121311
     *
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $ownerName;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'displayName' => 'DisplayName',
        'errorMessage' => 'ErrorMessage',
        'id' => 'Id',
        'name' => 'Name',
        'ownerId' => 'OwnerId',
        'ownerName' => 'OwnerName',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceStatusList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['OwnerName'])) {
            $model->ownerName = $map['OwnerName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
