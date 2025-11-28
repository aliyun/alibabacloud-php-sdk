<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LingMou\V20250527\Models;

use AlibabaCloud\Dara\Model;

class BroadcastVideo extends Model
{
    /**
     * @var string
     */
    public $alignmentFileURL;

    /**
     * @var string
     */
    public $captionURL;

    /**
     * @var string
     */
    public $coverURL;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $videoURL;
    protected $_name = [
        'alignmentFileURL' => 'alignmentFileURL',
        'captionURL' => 'captionURL',
        'coverURL' => 'coverURL',
        'createTime' => 'createTime',
        'id' => 'id',
        'modifiedTime' => 'modifiedTime',
        'name' => 'name',
        'status' => 'status',
        'videoURL' => 'videoURL',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alignmentFileURL) {
            $res['alignmentFileURL'] = $this->alignmentFileURL;
        }

        if (null !== $this->captionURL) {
            $res['captionURL'] = $this->captionURL;
        }

        if (null !== $this->coverURL) {
            $res['coverURL'] = $this->coverURL;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->modifiedTime) {
            $res['modifiedTime'] = $this->modifiedTime;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->videoURL) {
            $res['videoURL'] = $this->videoURL;
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
        if (isset($map['alignmentFileURL'])) {
            $model->alignmentFileURL = $map['alignmentFileURL'];
        }

        if (isset($map['captionURL'])) {
            $model->captionURL = $map['captionURL'];
        }

        if (isset($map['coverURL'])) {
            $model->coverURL = $map['coverURL'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['modifiedTime'])) {
            $model->modifiedTime = $map['modifiedTime'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['videoURL'])) {
            $model->videoURL = $map['videoURL'];
        }

        return $model;
    }
}
