<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\GrafanaWorkspace\tags;
use AlibabaCloud\Tea\Model;

class GrafanaWorkspace extends Model
{
    /**
     * @var bool
     */
    public $commercial;

    /**
     * @var string
     */
    public $deployType;

    /**
     * @var string
     */
    public $description;

    /**
     * @example 1652803200000
     *
     * @var float
     */
    public $endTime;

    /**
     * @example 创建时间
     *
     * @var float
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $grafanaVersion;

    /**
     * @var string
     */
    public $grafanaWorkspaceDomain;

    /**
     * @example on
     *
     * @var string
     */
    public $grafanaWorkspaceDomainStatus;

    /**
     * @example experts_edition/advanced_edition/standard
     *
     * @var string
     */
    public $grafanaWorkspaceEdition;

    /**
     * @example g-thisisademo666
     *
     * @var string
     */
    public $grafanaWorkspaceId;

    /**
     * @example 127.0.0.1:3000
     *
     * @var string
     */
    public $grafanaWorkspaceIp;

    /**
     * @var string
     */
    public $grafanaWorkspaceName;

    /**
     * @example 10
     *
     * @var string
     */
    public $maxAccount;

    /**
     * @var string
     */
    public $ntmId;

    /**
     * @var string
     */
    public $personalDomain;

    /**
     * @var string
     */
    public $personalDomainPrefix;

    /**
     * @var string
     */
    public $privateDomain;

    /**
     * @var string
     */
    public $privateIp;

    /**
     * @example http/https
     *
     * @var string
     */
    public $protocol;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var bool
     */
    public $shareSynced;

    /**
     * @example 1.1.1.1
     *
     * @var string
     */
    public $snatIp;

    /**
     * @example Starting/Running/Stop/DeleteSucceed
     *
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string[]
     */
    public $upgradeVersion;

    /**
     * @example 66666666
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'commercial'                   => 'commercial',
        'deployType'                   => 'deployType',
        'description'                  => 'description',
        'endTime'                      => 'endTime',
        'gmtCreate'                    => 'gmtCreate',
        'grafanaVersion'               => 'grafanaVersion',
        'grafanaWorkspaceDomain'       => 'grafanaWorkspaceDomain',
        'grafanaWorkspaceDomainStatus' => 'grafanaWorkspaceDomainStatus',
        'grafanaWorkspaceEdition'      => 'grafanaWorkspaceEdition',
        'grafanaWorkspaceId'           => 'grafanaWorkspaceId',
        'grafanaWorkspaceIp'           => 'grafanaWorkspaceIp',
        'grafanaWorkspaceName'         => 'grafanaWorkspaceName',
        'maxAccount'                   => 'maxAccount',
        'ntmId'                        => 'ntmId',
        'personalDomain'               => 'personalDomain',
        'personalDomainPrefix'         => 'personalDomainPrefix',
        'privateDomain'                => 'privateDomain',
        'privateIp'                    => 'privateIp',
        'protocol'                     => 'protocol',
        'regionId'                     => 'regionId',
        'resourceGroupId'              => 'resourceGroupId',
        'shareSynced'                  => 'shareSynced',
        'snatIp'                       => 'snatIp',
        'status'                       => 'status',
        'tags'                         => 'tags',
        'upgradeVersion'               => 'upgradeVersion',
        'userId'                       => 'userId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commercial) {
            $res['commercial'] = $this->commercial;
        }
        if (null !== $this->deployType) {
            $res['deployType'] = $this->deployType;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->grafanaVersion) {
            $res['grafanaVersion'] = $this->grafanaVersion;
        }
        if (null !== $this->grafanaWorkspaceDomain) {
            $res['grafanaWorkspaceDomain'] = $this->grafanaWorkspaceDomain;
        }
        if (null !== $this->grafanaWorkspaceDomainStatus) {
            $res['grafanaWorkspaceDomainStatus'] = $this->grafanaWorkspaceDomainStatus;
        }
        if (null !== $this->grafanaWorkspaceEdition) {
            $res['grafanaWorkspaceEdition'] = $this->grafanaWorkspaceEdition;
        }
        if (null !== $this->grafanaWorkspaceId) {
            $res['grafanaWorkspaceId'] = $this->grafanaWorkspaceId;
        }
        if (null !== $this->grafanaWorkspaceIp) {
            $res['grafanaWorkspaceIp'] = $this->grafanaWorkspaceIp;
        }
        if (null !== $this->grafanaWorkspaceName) {
            $res['grafanaWorkspaceName'] = $this->grafanaWorkspaceName;
        }
        if (null !== $this->maxAccount) {
            $res['maxAccount'] = $this->maxAccount;
        }
        if (null !== $this->ntmId) {
            $res['ntmId'] = $this->ntmId;
        }
        if (null !== $this->personalDomain) {
            $res['personalDomain'] = $this->personalDomain;
        }
        if (null !== $this->personalDomainPrefix) {
            $res['personalDomainPrefix'] = $this->personalDomainPrefix;
        }
        if (null !== $this->privateDomain) {
            $res['privateDomain'] = $this->privateDomain;
        }
        if (null !== $this->privateIp) {
            $res['privateIp'] = $this->privateIp;
        }
        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->shareSynced) {
            $res['shareSynced'] = $this->shareSynced;
        }
        if (null !== $this->snatIp) {
            $res['snatIp'] = $this->snatIp;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->upgradeVersion) {
            $res['upgradeVersion'] = $this->upgradeVersion;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GrafanaWorkspace
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commercial'])) {
            $model->commercial = $map['commercial'];
        }
        if (isset($map['deployType'])) {
            $model->deployType = $map['deployType'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['grafanaVersion'])) {
            $model->grafanaVersion = $map['grafanaVersion'];
        }
        if (isset($map['grafanaWorkspaceDomain'])) {
            $model->grafanaWorkspaceDomain = $map['grafanaWorkspaceDomain'];
        }
        if (isset($map['grafanaWorkspaceDomainStatus'])) {
            $model->grafanaWorkspaceDomainStatus = $map['grafanaWorkspaceDomainStatus'];
        }
        if (isset($map['grafanaWorkspaceEdition'])) {
            $model->grafanaWorkspaceEdition = $map['grafanaWorkspaceEdition'];
        }
        if (isset($map['grafanaWorkspaceId'])) {
            $model->grafanaWorkspaceId = $map['grafanaWorkspaceId'];
        }
        if (isset($map['grafanaWorkspaceIp'])) {
            $model->grafanaWorkspaceIp = $map['grafanaWorkspaceIp'];
        }
        if (isset($map['grafanaWorkspaceName'])) {
            $model->grafanaWorkspaceName = $map['grafanaWorkspaceName'];
        }
        if (isset($map['maxAccount'])) {
            $model->maxAccount = $map['maxAccount'];
        }
        if (isset($map['ntmId'])) {
            $model->ntmId = $map['ntmId'];
        }
        if (isset($map['personalDomain'])) {
            $model->personalDomain = $map['personalDomain'];
        }
        if (isset($map['personalDomainPrefix'])) {
            $model->personalDomainPrefix = $map['personalDomainPrefix'];
        }
        if (isset($map['privateDomain'])) {
            $model->privateDomain = $map['privateDomain'];
        }
        if (isset($map['privateIp'])) {
            $model->privateIp = $map['privateIp'];
        }
        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }
        if (isset($map['shareSynced'])) {
            $model->shareSynced = $map['shareSynced'];
        }
        if (isset($map['snatIp'])) {
            $model->snatIp = $map['snatIp'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['upgradeVersion'])) {
            if (!empty($map['upgradeVersion'])) {
                $model->upgradeVersion = $map['upgradeVersion'];
            }
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
