<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sandbox\V20260820\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\PublicListedSandbox\resourceTags;

class PublicListedSandbox extends Model
{
    /**
     * @var bool
     */
    public $autoPause;

    /**
     * @var bool
     */
    public $autoResume;

    /**
     * @var float
     */
    public $cpu;

    /**
     * @var int
     */
    public $diskSize;

    /**
     * @var string
     */
    public $endAt;

    /**
     * @var int
     */
    public $memorySize;

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
        'autoPause' => 'autoPause',
        'autoResume' => 'autoResume',
        'cpu' => 'cpu',
        'diskSize' => 'diskSize',
        'endAt' => 'endAt',
        'memorySize' => 'memorySize',
        'resourceGroupID' => 'resourceGroupID',
        'resourceTags' => 'resourceTags',
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
        if (\is_array($this->resourceTags)) {
            Model::validateArray($this->resourceTags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoPause) {
            $res['autoPause'] = $this->autoPause;
        }

        if (null !== $this->autoResume) {
            $res['autoResume'] = $this->autoResume;
        }

        if (null !== $this->cpu) {
            $res['cpu'] = $this->cpu;
        }

        if (null !== $this->diskSize) {
            $res['diskSize'] = $this->diskSize;
        }

        if (null !== $this->endAt) {
            $res['endAt'] = $this->endAt;
        }

        if (null !== $this->memorySize) {
            $res['memorySize'] = $this->memorySize;
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
        if (isset($map['autoPause'])) {
            $model->autoPause = $map['autoPause'];
        }

        if (isset($map['autoResume'])) {
            $model->autoResume = $map['autoResume'];
        }

        if (isset($map['cpu'])) {
            $model->cpu = $map['cpu'];
        }

        if (isset($map['diskSize'])) {
            $model->diskSize = $map['diskSize'];
        }

        if (isset($map['endAt'])) {
            $model->endAt = $map['endAt'];
        }

        if (isset($map['memorySize'])) {
            $model->memorySize = $map['memorySize'];
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
