<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ModifyTransitRouterCapacityReservationsRequest;

use AlibabaCloud\Dara\Model;

class deploymentSets extends Model
{
    /**
     * @var string
     */
    public $deploymentSetID;

    /**
     * @var string
     */
    public $zoneID;
    protected $_name = [
        'deploymentSetID' => 'DeploymentSetID',
        'zoneID' => 'ZoneID',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deploymentSetID) {
            $res['DeploymentSetID'] = $this->deploymentSetID;
        }

        if (null !== $this->zoneID) {
            $res['ZoneID'] = $this->zoneID;
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
        if (isset($map['DeploymentSetID'])) {
            $model->deploymentSetID = $map['DeploymentSetID'];
        }

        if (isset($map['ZoneID'])) {
            $model->zoneID = $map['ZoneID'];
        }

        return $model;
    }
}
