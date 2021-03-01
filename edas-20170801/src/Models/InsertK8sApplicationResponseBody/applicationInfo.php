<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\InsertK8sApplicationResponseBody;

use AlibabaCloud\Tea\Model;

class applicationInfo extends Model
{
    /**
     * @var string
     */
    public $changeOrderId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var bool
     */
    public $dockerize;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $edasId;

    /**
     * @var int
     */
    public $clusterType;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'changeOrderId' => 'ChangeOrderId',
        'appName'       => 'AppName',
        'dockerize'     => 'Dockerize',
        'owner'         => 'Owner',
        'edasId'        => 'EdasId',
        'clusterType'   => 'ClusterType',
        'appId'         => 'AppId',
        'userId'        => 'UserId',
        'regionId'      => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changeOrderId) {
            $res['ChangeOrderId'] = $this->changeOrderId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->dockerize) {
            $res['Dockerize'] = $this->dockerize;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->edasId) {
            $res['EdasId'] = $this->edasId;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applicationInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChangeOrderId'])) {
            $model->changeOrderId = $map['ChangeOrderId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['Dockerize'])) {
            $model->dockerize = $map['Dockerize'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['EdasId'])) {
            $model->edasId = $map['EdasId'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
