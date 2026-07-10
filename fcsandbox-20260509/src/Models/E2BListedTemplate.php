<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCSandbox\V20260509\Models;

use AlibabaCloud\Dara\Model;

class E2BListedTemplate extends Model
{
    /**
     * @var string
     */
    public $buildStatus;

    /**
     * @var string
     */
    public $category;

    /**
     * @var int
     */
    public $cpuCount;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $functionName;

    /**
     * @var LogConfiguration
     */
    public $logConfiguration;

    /**
     * @var int
     */
    public $memoryMB;

    /**
     * @var string[]
     */
    public $names;

    /**
     * @var bool
     */
    public $public;

    /**
     * @var string
     */
    public $resourceGroupID;

    /**
     * @var string
     */
    public $statusReason;

    /**
     * @var E2BTemplateTag[]
     */
    public $tags;

    /**
     * @var string
     */
    public $teamID;

    /**
     * @var string
     */
    public $teamName;

    /**
     * @var string
     */
    public $templateID;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $userID;
    protected $_name = [
        'buildStatus' => 'buildStatus',
        'category' => 'category',
        'cpuCount' => 'cpuCount',
        'createdAt' => 'createdAt',
        'functionName' => 'functionName',
        'logConfiguration' => 'logConfiguration',
        'memoryMB' => 'memoryMB',
        'names' => 'names',
        'public' => 'public',
        'resourceGroupID' => 'resourceGroupID',
        'statusReason' => 'statusReason',
        'tags' => 'tags',
        'teamID' => 'teamID',
        'teamName' => 'teamName',
        'templateID' => 'templateID',
        'updatedAt' => 'updatedAt',
        'userID' => 'userID',
    ];

    public function validate()
    {
        if (null !== $this->logConfiguration) {
            $this->logConfiguration->validate();
        }
        if (\is_array($this->names)) {
            Model::validateArray($this->names);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->buildStatus) {
            $res['buildStatus'] = $this->buildStatus;
        }

        if (null !== $this->category) {
            $res['category'] = $this->category;
        }

        if (null !== $this->cpuCount) {
            $res['cpuCount'] = $this->cpuCount;
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->functionName) {
            $res['functionName'] = $this->functionName;
        }

        if (null !== $this->logConfiguration) {
            $res['logConfiguration'] = null !== $this->logConfiguration ? $this->logConfiguration->toArray($noStream) : $this->logConfiguration;
        }

        if (null !== $this->memoryMB) {
            $res['memoryMB'] = $this->memoryMB;
        }

        if (null !== $this->names) {
            if (\is_array($this->names)) {
                $res['names'] = [];
                $n1 = 0;
                foreach ($this->names as $item1) {
                    $res['names'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->public) {
            $res['public'] = $this->public;
        }

        if (null !== $this->resourceGroupID) {
            $res['resourceGroupID'] = $this->resourceGroupID;
        }

        if (null !== $this->statusReason) {
            $res['statusReason'] = $this->statusReason;
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

        if (null !== $this->teamID) {
            $res['teamID'] = $this->teamID;
        }

        if (null !== $this->teamName) {
            $res['teamName'] = $this->teamName;
        }

        if (null !== $this->templateID) {
            $res['templateID'] = $this->templateID;
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
        }

        if (null !== $this->userID) {
            $res['userID'] = $this->userID;
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
        if (isset($map['buildStatus'])) {
            $model->buildStatus = $map['buildStatus'];
        }

        if (isset($map['category'])) {
            $model->category = $map['category'];
        }

        if (isset($map['cpuCount'])) {
            $model->cpuCount = $map['cpuCount'];
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['functionName'])) {
            $model->functionName = $map['functionName'];
        }

        if (isset($map['logConfiguration'])) {
            $model->logConfiguration = LogConfiguration::fromMap($map['logConfiguration']);
        }

        if (isset($map['memoryMB'])) {
            $model->memoryMB = $map['memoryMB'];
        }

        if (isset($map['names'])) {
            if (!empty($map['names'])) {
                $model->names = [];
                $n1 = 0;
                foreach ($map['names'] as $item1) {
                    $model->names[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['public'])) {
            $model->public = $map['public'];
        }

        if (isset($map['resourceGroupID'])) {
            $model->resourceGroupID = $map['resourceGroupID'];
        }

        if (isset($map['statusReason'])) {
            $model->statusReason = $map['statusReason'];
        }

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1] = E2BTemplateTag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['teamID'])) {
            $model->teamID = $map['teamID'];
        }

        if (isset($map['teamName'])) {
            $model->teamName = $map['teamName'];
        }

        if (isset($map['templateID'])) {
            $model->templateID = $map['templateID'];
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        if (isset($map['userID'])) {
            $model->userID = $map['userID'];
        }

        return $model;
    }
}
