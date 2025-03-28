<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class CreateProjectShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $disableDevelopment;

    /**
     * @var int
     */
    public $isAllowDownload;

    /**
     * @var string
     */
    public $projectDescription;

    /**
     * @var string
     */
    public $projectIdentifier;

    /**
     * @var int
     */
    public $projectMode;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @var string
     */
    public $tagsShrink;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'disableDevelopment' => 'DisableDevelopment',
        'isAllowDownload' => 'IsAllowDownload',
        'projectDescription' => 'ProjectDescription',
        'projectIdentifier' => 'ProjectIdentifier',
        'projectMode' => 'ProjectMode',
        'projectName' => 'ProjectName',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'tagsShrink' => 'Tags',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->disableDevelopment) {
            $res['DisableDevelopment'] = $this->disableDevelopment;
        }

        if (null !== $this->isAllowDownload) {
            $res['IsAllowDownload'] = $this->isAllowDownload;
        }

        if (null !== $this->projectDescription) {
            $res['ProjectDescription'] = $this->projectDescription;
        }

        if (null !== $this->projectIdentifier) {
            $res['ProjectIdentifier'] = $this->projectIdentifier;
        }

        if (null !== $this->projectMode) {
            $res['ProjectMode'] = $this->projectMode;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
        }

        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DisableDevelopment'])) {
            $model->disableDevelopment = $map['DisableDevelopment'];
        }

        if (isset($map['IsAllowDownload'])) {
            $model->isAllowDownload = $map['IsAllowDownload'];
        }

        if (isset($map['ProjectDescription'])) {
            $model->projectDescription = $map['ProjectDescription'];
        }

        if (isset($map['ProjectIdentifier'])) {
            $model->projectIdentifier = $map['ProjectIdentifier'];
        }

        if (isset($map['ProjectMode'])) {
            $model->projectMode = $map['ProjectMode'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }

        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }

        return $model;
    }
}
