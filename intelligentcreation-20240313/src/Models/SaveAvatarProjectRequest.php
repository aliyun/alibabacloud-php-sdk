<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SaveAvatarProjectRequest\frames;

class SaveAvatarProjectRequest extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $bitRate;

    /**
     * @var string
     */
    public $frameRate;

    /**
     * @var frames[]
     */
    public $frames;

    /**
     * @var string
     */
    public $operateType;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $resSpecType;

    /**
     * @var string
     */
    public $resolution;

    /**
     * @var string
     */
    public $scaleType;

    /**
     * @var string
     */
    public $scriptModelTag;

    /**
     * @var string
     */
    public $synchronizedDisplay;
    protected $_name = [
        'agentId' => 'agentId',
        'bitRate' => 'bitRate',
        'frameRate' => 'frameRate',
        'frames' => 'frames',
        'operateType' => 'operateType',
        'projectId' => 'projectId',
        'projectName' => 'projectName',
        'resSpecType' => 'resSpecType',
        'resolution' => 'resolution',
        'scaleType' => 'scaleType',
        'scriptModelTag' => 'scriptModelTag',
        'synchronizedDisplay' => 'synchronizedDisplay',
    ];

    public function validate()
    {
        if (\is_array($this->frames)) {
            Model::validateArray($this->frames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['agentId'] = $this->agentId;
        }

        if (null !== $this->bitRate) {
            $res['bitRate'] = $this->bitRate;
        }

        if (null !== $this->frameRate) {
            $res['frameRate'] = $this->frameRate;
        }

        if (null !== $this->frames) {
            if (\is_array($this->frames)) {
                $res['frames'] = [];
                $n1 = 0;
                foreach ($this->frames as $item1) {
                    $res['frames'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->operateType) {
            $res['operateType'] = $this->operateType;
        }

        if (null !== $this->projectId) {
            $res['projectId'] = $this->projectId;
        }

        if (null !== $this->projectName) {
            $res['projectName'] = $this->projectName;
        }

        if (null !== $this->resSpecType) {
            $res['resSpecType'] = $this->resSpecType;
        }

        if (null !== $this->resolution) {
            $res['resolution'] = $this->resolution;
        }

        if (null !== $this->scaleType) {
            $res['scaleType'] = $this->scaleType;
        }

        if (null !== $this->scriptModelTag) {
            $res['scriptModelTag'] = $this->scriptModelTag;
        }

        if (null !== $this->synchronizedDisplay) {
            $res['synchronizedDisplay'] = $this->synchronizedDisplay;
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
        if (isset($map['agentId'])) {
            $model->agentId = $map['agentId'];
        }

        if (isset($map['bitRate'])) {
            $model->bitRate = $map['bitRate'];
        }

        if (isset($map['frameRate'])) {
            $model->frameRate = $map['frameRate'];
        }

        if (isset($map['frames'])) {
            if (!empty($map['frames'])) {
                $model->frames = [];
                $n1 = 0;
                foreach ($map['frames'] as $item1) {
                    $model->frames[$n1] = frames::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['operateType'])) {
            $model->operateType = $map['operateType'];
        }

        if (isset($map['projectId'])) {
            $model->projectId = $map['projectId'];
        }

        if (isset($map['projectName'])) {
            $model->projectName = $map['projectName'];
        }

        if (isset($map['resSpecType'])) {
            $model->resSpecType = $map['resSpecType'];
        }

        if (isset($map['resolution'])) {
            $model->resolution = $map['resolution'];
        }

        if (isset($map['scaleType'])) {
            $model->scaleType = $map['scaleType'];
        }

        if (isset($map['scriptModelTag'])) {
            $model->scriptModelTag = $map['scriptModelTag'];
        }

        if (isset($map['synchronizedDisplay'])) {
            $model->synchronizedDisplay = $map['synchronizedDisplay'];
        }

        return $model;
    }
}
