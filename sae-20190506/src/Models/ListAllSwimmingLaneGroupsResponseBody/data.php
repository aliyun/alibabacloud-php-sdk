<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListAllSwimmingLaneGroupsResponseBody;

use AlibabaCloud\SDK\Sae\V20190506\Models\ListAllSwimmingLaneGroupsResponseBody\data\apps;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListAllSwimmingLaneGroupsResponseBody\data\entryApp;
use AlibabaCloud\Tea\Model;

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
     * @example 0
     *
     * @var int
     */
    public $canaryModel;

    /**
     * @var entryApp
     */
    public $entryApp;

    /**
     * @example mse_ingresspost-cn-axc49******
     *
     * @var string
     */
    public $entryAppId;

    /**
     * @example mse-gw
     *
     * @var string
     */
    public $entryAppType;

    /**
     * @example 2074
     *
     * @var int
     */
    public $groupId;

    /**
     * @example mse-test
     *
     * @var string
     */
    public $groupName;

    /**
     * @example sae-test
     *
     * @var string
     */
    public $mseNamespaceId;

    /**
     * @example cn-beijing:test
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @example 2
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appIds) {
            $res['AppIds'] = $this->appIds;
        }
        if (null !== $this->apps) {
            $res['Apps'] = [];
            if (null !== $this->apps && \is_array($this->apps)) {
                $n = 0;
                foreach ($this->apps as $item) {
                    $res['Apps'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->canaryModel) {
            $res['CanaryModel'] = $this->canaryModel;
        }
        if (null !== $this->entryApp) {
            $res['EntryApp'] = null !== $this->entryApp ? $this->entryApp->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppIds'])) {
            if (!empty($map['AppIds'])) {
                $model->appIds = $map['AppIds'];
            }
        }
        if (isset($map['Apps'])) {
            if (!empty($map['Apps'])) {
                $model->apps = [];
                $n = 0;
                foreach ($map['Apps'] as $item) {
                    $model->apps[$n++] = null !== $item ? apps::fromMap($item) : $item;
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
