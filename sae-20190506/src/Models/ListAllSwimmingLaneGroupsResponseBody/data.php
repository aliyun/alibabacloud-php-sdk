<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListAllSwimmingLaneGroupsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListAllSwimmingLaneGroupsResponseBody\data\apps;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListAllSwimmingLaneGroupsResponseBody\data\entryApp;

class data extends Model
{
    /**
     * @var string[]
     */
    public $appIds;

    /**
     * @var apps[]
     */
    public $apps;

    /**
     * @var int
     */
    public $canaryModel;

    /**
     * @var entryApp
     */
    public $entryApp;

    /**
     * @var string
     */
    public $entryAppId;

    /**
     * @var string
     */
    public $entryAppType;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $mseNamespaceId;

    /**
     * @var string
     */
    public $namespaceId;

    /**
     * @var string
     */
    public $swimVersion;
    protected $_name = [
        'appIds' => 'AppIds',
        'apps' => 'Apps',
        'canaryModel' => 'CanaryModel',
        'entryApp' => 'EntryApp',
        'entryAppId' => 'EntryAppId',
        'entryAppType' => 'EntryAppType',
        'groupId' => 'GroupId',
        'groupName' => 'GroupName',
        'mseNamespaceId' => 'MseNamespaceId',
        'namespaceId' => 'NamespaceId',
        'swimVersion' => 'SwimVersion',
    ];

    public function validate()
    {
        if (\is_array($this->appIds)) {
            Model::validateArray($this->appIds);
        }
        if (\is_array($this->apps)) {
            Model::validateArray($this->apps);
        }
        if (null !== $this->entryApp) {
            $this->entryApp->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appIds) {
            if (\is_array($this->appIds)) {
                $res['AppIds'] = [];
                $n1 = 0;
                foreach ($this->appIds as $item1) {
                    $res['AppIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->apps) {
            if (\is_array($this->apps)) {
                $res['Apps'] = [];
                $n1 = 0;
                foreach ($this->apps as $item1) {
                    $res['Apps'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->canaryModel) {
            $res['CanaryModel'] = $this->canaryModel;
        }

        if (null !== $this->entryApp) {
            $res['EntryApp'] = null !== $this->entryApp ? $this->entryApp->toArray($noStream) : $this->entryApp;
        }

        if (null !== $this->entryAppId) {
            $res['EntryAppId'] = $this->entryAppId;
        }

        if (null !== $this->entryAppType) {
            $res['EntryAppType'] = $this->entryAppType;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->mseNamespaceId) {
            $res['MseNamespaceId'] = $this->mseNamespaceId;
        }

        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }

        if (null !== $this->swimVersion) {
            $res['SwimVersion'] = $this->swimVersion;
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
        if (isset($map['AppIds'])) {
            if (!empty($map['AppIds'])) {
                $model->appIds = [];
                $n1 = 0;
                foreach ($map['AppIds'] as $item1) {
                    $model->appIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Apps'])) {
            if (!empty($map['Apps'])) {
                $model->apps = [];
                $n1 = 0;
                foreach ($map['Apps'] as $item1) {
                    $model->apps[$n1] = apps::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CanaryModel'])) {
            $model->canaryModel = $map['CanaryModel'];
        }

        if (isset($map['EntryApp'])) {
            $model->entryApp = entryApp::fromMap($map['EntryApp']);
        }

        if (isset($map['EntryAppId'])) {
            $model->entryAppId = $map['EntryAppId'];
        }

        if (isset($map['EntryAppType'])) {
            $model->entryAppType = $map['EntryAppType'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['MseNamespaceId'])) {
            $model->mseNamespaceId = $map['MseNamespaceId'];
        }

        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }

        if (isset($map['SwimVersion'])) {
            $model->swimVersion = $map['SwimVersion'];
        }

        return $model;
    }
}
