<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Tea\Model;

class ModifyDatabaseInstanceDescriptionRequest extends Model
{
    /**
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $databaseInstanceDescription;

    /**
     * @example db-38263fa955774501a2ae1bdaed6f****
     *
     * @var string
     */
    public $databaseInstanceId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clientToken'                 => 'ClientToken',
        'databaseInstanceDescription' => 'DatabaseInstanceDescription',
        'databaseInstanceId'          => 'DatabaseInstanceId',
        'regionId'                    => 'RegionId',
    ];

    public function validate()
    {
    }

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
