<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models;

use AlibabaCloud\Tea\Model;

class CreateAccessTokenRequest extends Model
{
    /**
     * @description The maximum number of times that the activation code can be used to import the information of migration sources. Valid values: 1 to 1000.
     *
     * Default value: 100.
     * @example 10
     *
     * @var string
     */
    public $count;

    /**
     * @description The description of the activation code.
     *
     * @example The description of the activation code.
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the activation code. The name must be 2 to 128 characters in length. It must start with a letter and cannot start with http:// or https://. It can contain digits, colons (:), underscores (\_), and hyphens (-).
     *
     * @example test_name
     *
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description The validity period of the activation code. The activation code can no longer be used to import the information of migration sources after the code expires. Unit: day. Valid values: 1 to 90.
     *
     * Default value: 30.
     * @example 30
     *
     * @var string
     */
    public $timeToLiveInDays;
    protected $_name = [
        'count'                => 'Count',
        'description'          => 'Description',
        'name'                 => 'Name',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'timeToLiveInDays'     => 'TimeToLiveInDays',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->timeToLiveInDays) {
            $res['TimeToLiveInDays'] = $this->timeToLiveInDays;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAccessTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['TimeToLiveInDays'])) {
            $model->timeToLiveInDays = $map['TimeToLiveInDays'];
        }

        return $model;
    }
}
