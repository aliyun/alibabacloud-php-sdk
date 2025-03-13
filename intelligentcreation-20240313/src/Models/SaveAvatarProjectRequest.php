<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SaveAvatarProjectRequest\frames;
use AlibabaCloud\Tea\Model;

class SaveAvatarProjectRequest extends Model
{
    /**
     * @example 1000196
     *
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
     * @example CREATE
     *
     * @var string
     */
    public $operateType;

    /**
     * @example 787594567117586432
     *
     * @var string
     */
    public $projectId;

    /**
     * @example df_cs_471437
     *
     * @var string
     */
    public $projectName;

    /**
     * @example STANDARD
     *
     * @var string
     */
    public $resSpecType;

    /**
     * @var string
     */
    public $resolution;

    /**
     * @example 9:16
     *
     * @var string
     */
    public $scaleType;

    /**
     * @var string
     */
    public $synchronizedDisplay;
    protected $_name = [
        'agentId'             => 'agentId',
        'bitRate'             => 'bitRate',
        'frameRate'           => 'frameRate',
        'frames'              => 'frames',
        'operateType'         => 'operateType',
        'projectId'           => 'projectId',
        'projectName'         => 'projectName',
        'resSpecType'         => 'resSpecType',
        'resolution'          => 'resolution',
        'scaleType'           => 'scaleType',
        'synchronizedDisplay' => 'synchronizedDisplay',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['frames'] = [];
            if (null !== $this->frames && \is_array($this->frames)) {
                $n = 0;
                foreach ($this->frames as $item) {
                    $res['frames'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (null !== $this->synchronizedDisplay) {
            $res['synchronizedDisplay'] = $this->synchronizedDisplay;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveAvatarProjectRequest
     */
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
                $n             = 0;
                foreach ($map['frames'] as $item) {
                    $model->frames[$n++] = null !== $item ? frames::fromMap($item) : $item;
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
        if (isset($map['synchronizedDisplay'])) {
            $model->synchronizedDisplay = $map['synchronizedDisplay'];
        }

        return $model;
    }
}
