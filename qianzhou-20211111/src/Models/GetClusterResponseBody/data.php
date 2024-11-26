<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qianzhou\V20211111\Models\GetClusterResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $clusterID;

    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var string
     */
    public $currentVersion;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $profile;

    /**
     * @var string
     */
    public $regionID;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $spec;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $userID;
    protected $_name = [
        'clusterID'       => 'clusterID',
        'clusterType'     => 'clusterType',
        'currentVersion'  => 'currentVersion',
        'name'            => 'name',
        'profile'         => 'profile',
        'regionID'        => 'regionID',
        'securityGroupId' => 'securityGroupId',
        'spec'            => 'spec',
        'state'           => 'state',
        'userID'          => 'userID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterID) {
            $res['clusterID'] = $this->clusterID;
        }
        if (null !== $this->clusterType) {
            $res['clusterType'] = $this->clusterType;
        }
        if (null !== $this->currentVersion) {
            $res['currentVersion'] = $this->currentVersion;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->profile) {
            $res['profile'] = $this->profile;
        }
        if (null !== $this->regionID) {
            $res['regionID'] = $this->regionID;
        }
        if (null !== $this->securityGroupId) {
            $res['securityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->spec) {
            $res['spec'] = $this->spec;
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
        }
        if (null !== $this->userID) {
            $res['userID'] = $this->userID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clusterID'])) {
            $model->clusterID = $map['clusterID'];
        }
        if (isset($map['clusterType'])) {
            $model->clusterType = $map['clusterType'];
        }
        if (isset($map['currentVersion'])) {
            $model->currentVersion = $map['currentVersion'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['profile'])) {
            $model->profile = $map['profile'];
        }
        if (isset($map['regionID'])) {
            $model->regionID = $map['regionID'];
        }
        if (isset($map['securityGroupId'])) {
            $model->securityGroupId = $map['securityGroupId'];
        }
        if (isset($map['spec'])) {
            $model->spec = $map['spec'];
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }
        if (isset($map['userID'])) {
            $model->userID = $map['userID'];
        }

        return $model;
    }
}
