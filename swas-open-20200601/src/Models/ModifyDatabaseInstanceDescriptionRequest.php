<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Tea\Model;

class ModifyDatabaseInstanceDescriptionRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [How to ensure idempotence](https://help.aliyun.com/document_detail/25693.html).
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the Simple Database Service instance.
     *
     * This parameter is required.
     *
     * @var string
     */
    public $databaseInstanceDescription;

    /**
     * @description The ID of the Simple Database Service instance.
     *
     * This parameter is required.
     *
     * @example db-38263fa955774501a2ae1bdaed6f****
     *
     * @var string
     */
    public $databaseInstanceId;

    /**
     * @description The region ID of the Simple Database Service instance. You can call the [ListRegions](https://help.aliyun.com/document_detail/189315.html) operation to query the most recent region list.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'databaseInstanceDescription' => 'DatabaseInstanceDescription',
        'databaseInstanceId' => 'DatabaseInstanceId',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->databaseInstanceDescription) {
            $res['DatabaseInstanceDescription'] = $this->databaseInstanceDescription;
        }
        if (null !== $this->databaseInstanceId) {
            $res['DatabaseInstanceId'] = $this->databaseInstanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDatabaseInstanceDescriptionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DatabaseInstanceDescription'])) {
            $model->databaseInstanceDescription = $map['DatabaseInstanceDescription'];
        }
        if (isset($map['DatabaseInstanceId'])) {
            $model->databaseInstanceId = $map['DatabaseInstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
