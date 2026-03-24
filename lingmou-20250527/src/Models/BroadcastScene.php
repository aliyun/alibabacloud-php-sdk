<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LingMou\V20250527\Models;

use AlibabaCloud\Dara\Model;

class BroadcastScene extends Model
{
    /**
     * @var string
     */
    public $clipInfo;

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
    public $downloadURL;

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
    public $previewURL;

    /**
     * @var string
     */
    public $ratio;

    /**
     * @var int
     */
    public $remainSeconds;

    /**
     * @var string
     */
    public $shortVideoURL;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $thumbnailURL;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'clipInfo' => 'clipInfo',
        'coverURL' => 'coverURL',
        'createTime' => 'createTime',
        'downloadURL' => 'downloadURL',
        'id' => 'id',
        'modifiedTime' => 'modifiedTime',
        'name' => 'name',
        'previewURL' => 'previewURL',
        'ratio' => 'ratio',
        'remainSeconds' => 'remainSeconds',
        'shortVideoURL' => 'shortVideoURL',
        'status' => 'status',
        'thumbnailURL' => 'thumbnailURL',
        'version' => 'version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clipInfo) {
            $res['clipInfo'] = $this->clipInfo;
        }

        if (null !== $this->coverURL) {
            $res['coverURL'] = $this->coverURL;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->downloadURL) {
            $res['downloadURL'] = $this->downloadURL;
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

        if (null !== $this->previewURL) {
            $res['previewURL'] = $this->previewURL;
        }

        if (null !== $this->ratio) {
            $res['ratio'] = $this->ratio;
        }

        if (null !== $this->remainSeconds) {
            $res['remainSeconds'] = $this->remainSeconds;
        }

        if (null !== $this->shortVideoURL) {
            $res['shortVideoURL'] = $this->shortVideoURL;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->thumbnailURL) {
            $res['thumbnailURL'] = $this->thumbnailURL;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['clipInfo'])) {
            $model->clipInfo = $map['clipInfo'];
        }

        if (isset($map['coverURL'])) {
            $model->coverURL = $map['coverURL'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['downloadURL'])) {
            $model->downloadURL = $map['downloadURL'];
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

        if (isset($map['previewURL'])) {
            $model->previewURL = $map['previewURL'];
        }

        if (isset($map['ratio'])) {
            $model->ratio = $map['ratio'];
        }

        if (isset($map['remainSeconds'])) {
            $model->remainSeconds = $map['remainSeconds'];
        }

        if (isset($map['shortVideoURL'])) {
            $model->shortVideoURL = $map['shortVideoURL'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['thumbnailURL'])) {
            $model->thumbnailURL = $map['thumbnailURL'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
