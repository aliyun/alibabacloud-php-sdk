<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProjectsResponseBody\pageResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProjectsResponseBody\pageResult\projectList\tags;

class projectList extends Model
{
    /**
     * @var bool
     */
    public $disableDevelopment;
    /**
     * @var int
     */
    public $isDefault;
    /**
     * @var string
     */
    public $projectDescription;
    /**
     * @var int
     */
    public $projectId;
    /**
     * @var string
     */
    public $projectIdentifier;
    /**
     * @var string
     */
    public $projectName;
    /**
     * @var string
     */
    public $projectOwnerBaseId;
    /**
     * @var int
     */
    public $projectStatus;
    /**
     * @var string
     */
    public $projectStatusCode;
    /**
     * @var string
     */
    public $resourceManagerResourceGroupId;
    /**
     * @var int
     */
    public $tablePrivacyMode;
    /**
     * @var tags[]
     */
    public $tags;
    /**
     * @var bool
     */
    public $useProxyOdpsAccount;
    protected $_name = [
        'disableDevelopment'             => 'DisableDevelopment',
        'isDefault'                      => 'IsDefault',
        'projectDescription'             => 'ProjectDescription',
        'projectId'                      => 'ProjectId',
        'projectIdentifier'              => 'ProjectIdentifier',
        'projectName'                    => 'ProjectName',
        'projectOwnerBaseId'             => 'ProjectOwnerBaseId',
        'projectStatus'                  => 'ProjectStatus',
        'projectStatusCode'              => 'ProjectStatusCode',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'tablePrivacyMode'               => 'TablePrivacyMode',
        'tags'                           => 'Tags',
        'useProxyOdpsAccount'            => 'UseProxyOdpsAccount',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->disableDevelopment) {
            $res['DisableDevelopment'] = $this->disableDevelopment;
        }

        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }

        if (null !== $this->projectDescription) {
            $res['ProjectDescription'] = $this->projectDescription;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->projectIdentifier) {
            $res['ProjectIdentifier'] = $this->projectIdentifier;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->projectOwnerBaseId) {
            $res['ProjectOwnerBaseId'] = $this->projectOwnerBaseId;
        }

        if (null !== $this->projectStatus) {
            $res['ProjectStatus'] = $this->projectStatus;
        }

        if (null !== $this->projectStatusCode) {
            $res['ProjectStatusCode'] = $this->projectStatusCode;
        }

        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
        }

        if (null !== $this->tablePrivacyMode) {
            $res['TablePrivacyMode'] = $this->tablePrivacyMode;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->useProxyOdpsAccount) {
            $res['UseProxyOdpsAccount'] = $this->useProxyOdpsAccount;
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
        if (isset($map['DisableDevelopment'])) {
            $model->disableDevelopment = $map['DisableDevelopment'];
        }

        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }

        if (isset($map['ProjectDescription'])) {
            $model->projectDescription = $map['ProjectDescription'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['ProjectIdentifier'])) {
            $model->projectIdentifier = $map['ProjectIdentifier'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['ProjectOwnerBaseId'])) {
            $model->projectOwnerBaseId = $map['ProjectOwnerBaseId'];
        }

        if (isset($map['ProjectStatus'])) {
            $model->projectStatus = $map['ProjectStatus'];
        }

        if (isset($map['ProjectStatusCode'])) {
            $model->projectStatusCode = $map['ProjectStatusCode'];
        }

        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }

        if (isset($map['TablePrivacyMode'])) {
            $model->tablePrivacyMode = $map['TablePrivacyMode'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1          = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['UseProxyOdpsAccount'])) {
            $model->useProxyOdpsAccount = $map['UseProxyOdpsAccount'];
        }

        return $model;
    }
}
