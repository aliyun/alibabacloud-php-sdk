<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListMultiChannelRecordingsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListMultiChannelRecordingsResponseBody\data\holdTimeSegments;

class data extends Model
{
    /**
     * @var string
     */
    public $agentChannelId;

    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $agentName;

    /**
     * @var string
     */
    public $contactId;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $fileUrl;

    /**
     * @var holdTimeSegments[]
     */
    public $holdTimeSegments;

    /**
     * @var string
     */
    public $ramId;

    /**
     * @var string
     */
    public $skillGroupId;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'agentChannelId' => 'AgentChannelId',
        'agentId' => 'AgentId',
        'agentName' => 'AgentName',
        'contactId' => 'ContactId',
        'duration' => 'Duration',
        'fileName' => 'FileName',
        'fileUrl' => 'FileUrl',
        'holdTimeSegments' => 'HoldTimeSegments',
        'ramId' => 'RamId',
        'skillGroupId' => 'SkillGroupId',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (\is_array($this->holdTimeSegments)) {
            Model::validateArray($this->holdTimeSegments);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentChannelId) {
            $res['AgentChannelId'] = $this->agentChannelId;
        }

        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
        }

        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }

        if (null !== $this->holdTimeSegments) {
            if (\is_array($this->holdTimeSegments)) {
                $res['HoldTimeSegments'] = [];
                $n1 = 0;
                foreach ($this->holdTimeSegments as $item1) {
                    $res['HoldTimeSegments'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->ramId) {
            $res['RamId'] = $this->ramId;
        }

        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['AgentChannelId'])) {
            $model->agentChannelId = $map['AgentChannelId'];
        }

        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }

        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
        }

        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }

        if (isset($map['HoldTimeSegments'])) {
            if (!empty($map['HoldTimeSegments'])) {
                $model->holdTimeSegments = [];
                $n1 = 0;
                foreach ($map['HoldTimeSegments'] as $item1) {
                    $model->holdTimeSegments[$n1++] = holdTimeSegments::fromMap($item1);
                }
            }
        }

        if (isset($map['RamId'])) {
            $model->ramId = $map['RamId'];
        }

        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
