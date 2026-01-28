<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20181015\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20181015\Models\GrafanaWorkspace\tags;

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
     * @var float
     */
    public $endTime;

    /**
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
     * @var string
     */
    public $grafanaWorkspaceDomainStatus;

    /**
     * @var string
     */
    public $grafanaWorkspaceEdition;

    /**
     * @var string
     */
    public $grafanaWorkspaceId;

    /**
     * @var string
     */
    public $grafanaWorkspaceIp;

    /**
     * @var string
     */
    public $grafanaWorkspaceName;

    /**
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
     * @var string
     */
    public $protocol;

    /**
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
     * @var string
     */
    public $snatIp;

    /**
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
     * @var string
     */
    public $userId;
    protected $_name = [
        'commercial' => 'commercial',
        'deployType' => 'deployType',
        'description' => 'description',
        'endTime' => 'endTime',
        'gmtCreate' => 'gmtCreate',
        'grafanaVersion' => 'grafanaVersion',
        'grafanaWorkspaceDomain' => 'grafanaWorkspaceDomain',
        'grafanaWorkspaceDomainStatus' => 'grafanaWorkspaceDomainStatus',
        'grafanaWorkspaceEdition' => 'grafanaWorkspaceEdition',
        'grafanaWorkspaceId' => 'grafanaWorkspaceId',
        'grafanaWorkspaceIp' => 'grafanaWorkspaceIp',
        'grafanaWorkspaceName' => 'grafanaWorkspaceName',
        'maxAccount' => 'maxAccount',
        'ntmId' => 'ntmId',
        'personalDomain' => 'personalDomain',
        'personalDomainPrefix' => 'personalDomainPrefix',
        'privateDomain' => 'privateDomain',
        'privateIp' => 'privateIp',
        'protocol' => 'protocol',
        'regionId' => 'regionId',
        'resourceGroupId' => 'resourceGroupId',
        'shareSynced' => 'shareSynced',
        'snatIp' => 'snatIp',
        'status' => 'status',
        'tags' => 'tags',
        'upgradeVersion' => 'upgradeVersion',
        'userId' => 'userId',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (\is_array($this->upgradeVersion)) {
            Model::validateArray($this->upgradeVersion);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->upgradeVersion) {
            if (\is_array($this->upgradeVersion)) {
                $res['upgradeVersion'] = [];
                $n1 = 0;
                foreach ($this->upgradeVersion as $item1) {
                    $res['upgradeVersion'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
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
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['upgradeVersion'])) {
            if (!empty($map['upgradeVersion'])) {
                $model->upgradeVersion = [];
                $n1 = 0;
                foreach ($map['upgradeVersion'] as $item1) {
                    $model->upgradeVersion[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
