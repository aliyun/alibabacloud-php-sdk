<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\AddTestResponseBody\data;

use AlibabaCloud\SDK\Mse\V20190531\Models\AddTestResponseBody\data\result\internetSlb;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddTestResponseBody\data\result\slb;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var bool
     */
    public $ahasOn;

    /**
     * @var bool
     */
    public $armsOn;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $currentVersion;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $gatewayType;

    /**
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var internetSlb[]
     */
    public $internetSlb;

    /**
     * @var string
     */
    public $latestVersion;

    /**
     * @var bool
     */
    public $mustUpgrade;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $primaryUser;

    /**
     * @var string
     */
    public $region;

    /**
     * @var int
     */
    public $replica;

    /**
     * @var slb[]
     */
    public $slb;

    /**
     * @var string
     */
    public $spec;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $statusDesc;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var bool
     */
    public $upgrade;

    /**
     * @var string
     */
    public $vswitch2;
    protected $_name = [
        'ahasOn'          => 'AhasOn',
        'armsOn'          => 'ArmsOn',
        'chargeType'      => 'ChargeType',
        'currentVersion'  => 'CurrentVersion',
        'endDate'         => 'EndDate',
        'gatewayType'     => 'GatewayType',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'gmtCreate'       => 'GmtCreate',
        'gmtModified'     => 'GmtModified',
        'id'              => 'Id',
        'instanceId'      => 'InstanceId',
        'internetSlb'     => 'InternetSlb',
        'latestVersion'   => 'LatestVersion',
        'mustUpgrade'     => 'MustUpgrade',
        'name'            => 'Name',
        'primaryUser'     => 'PrimaryUser',
        'region'          => 'Region',
        'replica'         => 'Replica',
        'slb'             => 'Slb',
        'spec'            => 'Spec',
        'status'          => 'Status',
        'statusDesc'      => 'StatusDesc',
        'tag'             => 'Tag',
        'upgrade'         => 'Upgrade',
        'vswitch2'        => 'Vswitch2',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ahasOn) {
            $res['AhasOn'] = $this->ahasOn;
        }
        if (null !== $this->armsOn) {
            $res['ArmsOn'] = $this->armsOn;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->currentVersion) {
            $res['CurrentVersion'] = $this->currentVersion;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->gatewayType) {
            $res['GatewayType'] = $this->gatewayType;
        }
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->internetSlb) {
            $res['InternetSlb'] = [];
            if (null !== $this->internetSlb && \is_array($this->internetSlb)) {
                $n = 0;
                foreach ($this->internetSlb as $item) {
                    $res['InternetSlb'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->latestVersion) {
            $res['LatestVersion'] = $this->latestVersion;
        }
        if (null !== $this->mustUpgrade) {
            $res['MustUpgrade'] = $this->mustUpgrade;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->primaryUser) {
            $res['PrimaryUser'] = $this->primaryUser;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->replica) {
            $res['Replica'] = $this->replica;
        }
        if (null !== $this->slb) {
            $res['Slb'] = [];
            if (null !== $this->slb && \is_array($this->slb)) {
                $n = 0;
                foreach ($this->slb as $item) {
                    $res['Slb'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusDesc) {
            $res['StatusDesc'] = $this->statusDesc;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->upgrade) {
            $res['Upgrade'] = $this->upgrade;
        }
        if (null !== $this->vswitch2) {
            $res['Vswitch2'] = $this->vswitch2;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AhasOn'])) {
            $model->ahasOn = $map['AhasOn'];
        }
        if (isset($map['ArmsOn'])) {
            $model->armsOn = $map['ArmsOn'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['CurrentVersion'])) {
            $model->currentVersion = $map['CurrentVersion'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['GatewayType'])) {
            $model->gatewayType = $map['GatewayType'];
        }
        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InternetSlb'])) {
            if (!empty($map['InternetSlb'])) {
                $model->internetSlb = [];
                $n                  = 0;
                foreach ($map['InternetSlb'] as $item) {
                    $model->internetSlb[$n++] = null !== $item ? internetSlb::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LatestVersion'])) {
            $model->latestVersion = $map['LatestVersion'];
        }
        if (isset($map['MustUpgrade'])) {
            $model->mustUpgrade = $map['MustUpgrade'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PrimaryUser'])) {
            $model->primaryUser = $map['PrimaryUser'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Replica'])) {
            $model->replica = $map['Replica'];
        }
        if (isset($map['Slb'])) {
            if (!empty($map['Slb'])) {
                $model->slb = [];
                $n          = 0;
                foreach ($map['Slb'] as $item) {
                    $model->slb[$n++] = null !== $item ? slb::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusDesc'])) {
            $model->statusDesc = $map['StatusDesc'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['Upgrade'])) {
            $model->upgrade = $map['Upgrade'];
        }
        if (isset($map['Vswitch2'])) {
            $model->vswitch2 = $map['Vswitch2'];
        }

        return $model;
    }
}
