<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCSandbox\V20260509\Models;

use AlibabaCloud\Dara\Model;

class PublicTemplateCache extends Model
{
    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $imageDigest;

    /**
     * @var int
     */
    public $imageSizeMB;

    /**
     * @var int
     */
    public $progress;

    /**
     * @var string
     */
    public $readyTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusReason;

    /**
     * @var string
     */
    public $teamID;

    /**
     * @var string
     */
    public $templateID;
    protected $_name = [
        'createdTime' => 'createdTime',
        'imageDigest' => 'imageDigest',
        'imageSizeMB' => 'imageSizeMB',
        'progress' => 'progress',
        'readyTime' => 'readyTime',
        'status' => 'status',
        'statusReason' => 'statusReason',
        'teamID' => 'teamID',
        'templateID' => 'templateID',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['createdTime'] = $this->createdTime;
        }

        if (null !== $this->imageDigest) {
            $res['imageDigest'] = $this->imageDigest;
        }

        if (null !== $this->imageSizeMB) {
            $res['imageSizeMB'] = $this->imageSizeMB;
        }

        if (null !== $this->progress) {
            $res['progress'] = $this->progress;
        }

        if (null !== $this->readyTime) {
            $res['readyTime'] = $this->readyTime;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->statusReason) {
            $res['statusReason'] = $this->statusReason;
        }

        if (null !== $this->teamID) {
            $res['teamID'] = $this->teamID;
        }

        if (null !== $this->templateID) {
            $res['templateID'] = $this->templateID;
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
        if (isset($map['createdTime'])) {
            $model->createdTime = $map['createdTime'];
        }

        if (isset($map['imageDigest'])) {
            $model->imageDigest = $map['imageDigest'];
        }

        if (isset($map['imageSizeMB'])) {
            $model->imageSizeMB = $map['imageSizeMB'];
        }

        if (isset($map['progress'])) {
            $model->progress = $map['progress'];
        }

        if (isset($map['readyTime'])) {
            $model->readyTime = $map['readyTime'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['statusReason'])) {
            $model->statusReason = $map['statusReason'];
        }

        if (isset($map['teamID'])) {
            $model->teamID = $map['teamID'];
        }

        if (isset($map['templateID'])) {
            $model->templateID = $map['templateID'];
        }

        return $model;
    }
}
