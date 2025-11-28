<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LingMou\V20250527\Models\ListPrivateTTSVoicesCustomResponseBody\data;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $audioURL;

    /**
     * @var string
     */
    public $censorStatus;

    /**
     * @var bool
     */
    public $common;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $errorDetail;

    /**
     * @var string
     */
    public $gender;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $remainSeconds;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $voiceKey;
    protected $_name = [
        'audioURL' => 'audioURL',
        'censorStatus' => 'censorStatus',
        'common' => 'common',
        'createTime' => 'createTime',
        'description' => 'description',
        'errorDetail' => 'errorDetail',
        'gender' => 'gender',
        'id' => 'id',
        'language' => 'language',
        'modifiedTime' => 'modifiedTime',
        'name' => 'name',
        'remainSeconds' => 'remainSeconds',
        'status' => 'status',
        'text' => 'text',
        'voiceKey' => 'voiceKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioURL) {
            $res['audioURL'] = $this->audioURL;
        }

        if (null !== $this->censorStatus) {
            $res['censorStatus'] = $this->censorStatus;
        }

        if (null !== $this->common) {
            $res['common'] = $this->common;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->errorDetail) {
            $res['errorDetail'] = $this->errorDetail;
        }

        if (null !== $this->gender) {
            $res['gender'] = $this->gender;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->language) {
            $res['language'] = $this->language;
        }

        if (null !== $this->modifiedTime) {
            $res['modifiedTime'] = $this->modifiedTime;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->remainSeconds) {
            $res['remainSeconds'] = $this->remainSeconds;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->text) {
            $res['text'] = $this->text;
        }

        if (null !== $this->voiceKey) {
            $res['voiceKey'] = $this->voiceKey;
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
        if (isset($map['audioURL'])) {
            $model->audioURL = $map['audioURL'];
        }

        if (isset($map['censorStatus'])) {
            $model->censorStatus = $map['censorStatus'];
        }

        if (isset($map['common'])) {
            $model->common = $map['common'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['errorDetail'])) {
            $model->errorDetail = $map['errorDetail'];
        }

        if (isset($map['gender'])) {
            $model->gender = $map['gender'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['language'])) {
            $model->language = $map['language'];
        }

        if (isset($map['modifiedTime'])) {
            $model->modifiedTime = $map['modifiedTime'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['remainSeconds'])) {
            $model->remainSeconds = $map['remainSeconds'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['text'])) {
            $model->text = $map['text'];
        }

        if (isset($map['voiceKey'])) {
            $model->voiceKey = $map['voiceKey'];
        }

        return $model;
    }
}
