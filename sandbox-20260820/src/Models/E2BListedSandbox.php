<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sandbox\V20260820\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\E2BListedSandbox\resourceTags;

class E2BListedSandbox extends Model
{
    /**
     * @var int
     */
    public $cpuCount;

    /**
     * @var int
     */
    public $diskSizeMB;

    /**
     * @var string
     */
    public $endAt;

    /**
     * @var int
     */
    public $generation;

    /**
     * @var int
     */
    public $memoryMB;

    /**
     * @var string[]
     */
    public $metadata;

    /**
     * @var string
     */
    public $resourceGroupID;

    /**
     * @var resourceTags[]
     */
    public $resourceTags;

    /**
     * @var string
     */
    public $sandboxID;

    /**
     * @var string
     */
    public $snapshotID;

    /**
     * @var string
     */
    public $startedAt;

    /**
     * @var string
     */
    public $state;

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
    public $teamPlan;

    /**
     * @var string
     */
    public $templateID;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $userID;
    protected $_name = [
        'cpuCount' => 'cpuCount',
        'diskSizeMB' => 'diskSizeMB',
        'endAt' => 'endAt',
        'generation' => 'generation',
        'memoryMB' => 'memoryMB',
        'metadata' => 'metadata',
        'resourceGroupID' => 'resourceGroupID',
        'resourceTags' => 'resourceTags',
        'sandboxID' => 'sandboxID',
        'snapshotID' => 'snapshotID',
        'startedAt' => 'startedAt',
        'state' => 'state',
        'teamID' => 'teamID',
        'teamName' => 'teamName',
        'teamPlan' => 'teamPlan',
        'templateID' => 'templateID',
        'templateName' => 'templateName',
        'userID' => 'userID',
    ];

    public function validate()
    {
        if (\is_array($this->metadata)) {
            Model::validateArray($this->metadata);
        }
        if (\is_array($this->resourceTags)) {
            Model::validateArray($this->resourceTags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cpuCount) {
            $res['cpuCount'] = $this->cpuCount;
        }

        if (null !== $this->diskSizeMB) {
            $res['diskSizeMB'] = $this->diskSizeMB;
        }

        if (null !== $this->endAt) {
            $res['endAt'] = $this->endAt;
        }

        if (null !== $this->generation) {
            $res['generation'] = $this->generation;
        }

        if (null !== $this->memoryMB) {
            $res['memoryMB'] = $this->memoryMB;
        }

        if (null !== $this->metadata) {
            if (\is_array($this->metadata)) {
                $res['metadata'] = [];
                foreach ($this->metadata as $key1 => $value1) {
                    $res['metadata'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->resourceGroupID) {
            $res['resourceGroupID'] = $this->resourceGroupID;
        }

        if (null !== $this->resourceTags) {
            if (\is_array($this->resourceTags)) {
                $res['resourceTags'] = [];
                $n1 = 0;
                foreach ($this->resourceTags as $item1) {
                    $res['resourceTags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sandboxID) {
            $res['sandboxID'] = $this->sandboxID;
        }

        if (null !== $this->snapshotID) {
            $res['snapshotID'] = $this->snapshotID;
        }

        if (null !== $this->startedAt) {
            $res['startedAt'] = $this->startedAt;
        }

        if (null !== $this->state) {
            $res['state'] = $this->state;
        }

        if (null !== $this->teamID) {
            $res['teamID'] = $this->teamID;
        }

        if (null !== $this->teamName) {
            $res['teamName'] = $this->teamName;
        }

        if (null !== $this->teamPlan) {
            $res['teamPlan'] = $this->teamPlan;
        }

        if (null !== $this->templateID) {
            $res['templateID'] = $this->templateID;
        }

        if (null !== $this->templateName) {
            $res['templateName'] = $this->templateName;
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
        if (isset($map['cpuCount'])) {
            $model->cpuCount = $map['cpuCount'];
        }

        if (isset($map['diskSizeMB'])) {
            $model->diskSizeMB = $map['diskSizeMB'];
        }

        if (isset($map['endAt'])) {
            $model->endAt = $map['endAt'];
        }

        if (isset($map['generation'])) {
            $model->generation = $map['generation'];
        }

        if (isset($map['memoryMB'])) {
            $model->memoryMB = $map['memoryMB'];
        }

        if (isset($map['metadata'])) {
            if (!empty($map['metadata'])) {
                $model->metadata = [];
                foreach ($map['metadata'] as $key1 => $value1) {
                    $model->metadata[$key1] = $value1;
                }
            }
        }

        if (isset($map['resourceGroupID'])) {
            $model->resourceGroupID = $map['resourceGroupID'];
        }

        if (isset($map['resourceTags'])) {
            if (!empty($map['resourceTags'])) {
                $model->resourceTags = [];
                $n1 = 0;
                foreach ($map['resourceTags'] as $item1) {
                    $model->resourceTags[$n1] = resourceTags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['sandboxID'])) {
            $model->sandboxID = $map['sandboxID'];
        }

        if (isset($map['snapshotID'])) {
            $model->snapshotID = $map['snapshotID'];
        }

        if (isset($map['startedAt'])) {
            $model->startedAt = $map['startedAt'];
        }

        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        if (isset($map['teamID'])) {
            $model->teamID = $map['teamID'];
        }

        if (isset($map['teamName'])) {
            $model->teamName = $map['teamName'];
        }

        if (isset($map['teamPlan'])) {
            $model->teamPlan = $map['teamPlan'];
        }

        if (isset($map['templateID'])) {
            $model->templateID = $map['templateID'];
        }

        if (isset($map['templateName'])) {
            $model->templateName = $map['templateName'];
        }

        if (isset($map['userID'])) {
            $model->userID = $map['userID'];
        }

        return $model;
    }
}
