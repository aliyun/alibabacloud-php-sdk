<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCSandbox\V20260509\Models;

use AlibabaCloud\Dara\Model;

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
     * @var string
     */
    public $sandboxID;

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
        'memoryMB' => 'memoryMB',
        'metadata' => 'metadata',
        'resourceGroupID' => 'resourceGroupID',
        'sandboxID' => 'sandboxID',
        'startedAt' => 'startedAt',
        'state' => 'state',
        'teamID' => 'teamID',
        'teamName' => 'teamName',
        'templateID' => 'templateID',
        'templateName' => 'templateName',
        'userID' => 'userID',
    ];

    public function validate()
    {
        if (\is_array($this->metadata)) {
            Model::validateArray($this->metadata);
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

        if (null !== $this->sandboxID) {
            $res['sandboxID'] = $this->sandboxID;
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

        if (isset($map['sandboxID'])) {
            $model->sandboxID = $map['sandboxID'];
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
