<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Dara\Model;

class ModifyDatabaseInstanceDescriptionRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var string
     */
    public $databaseInstanceDescription;
    /**
     * @var string
     */
    public $databaseInstanceId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
