<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class AddPolarOSSAuthorizedAccountRequest extends Model
{
    /**
     * @var string
     */
    public $authorizedUserIds;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $pfsInstanceId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'authorizedUserIds' => 'AuthorizedUserIds',
        'DBClusterId' => 'DBClusterId',
        'pfsInstanceId' => 'PfsInstanceId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizedUserIds) {
            $res['AuthorizedUserIds'] = $this->authorizedUserIds;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->pfsInstanceId) {
            $res['PfsInstanceId'] = $this->pfsInstanceId;
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
        if (isset($map['AuthorizedUserIds'])) {
            $model->authorizedUserIds = $map['AuthorizedUserIds'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['PfsInstanceId'])) {
            $model->pfsInstanceId = $map['PfsInstanceId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
