<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeListAntCloudAuthScenesResponseBody;

use AlibabaCloud\Dara\Model;

class scenes extends Model
{
    /**
     * @var int
     */
    public $appId;

    /**
     * @var string
     */
    public $bindMiniProgram;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $miniProgramName;

    /**
     * @var string
     */
    public $modifier;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var int
     */
    public $sceneId;

    /**
     * @var string
     */
    public $sceneName;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $storeImage;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'appId' => 'AppId',
        'bindMiniProgram' => 'BindMiniProgram',
        'createTime' => 'CreateTime',
        'creator' => 'Creator',
        'domain' => 'Domain',
        'miniProgramName' => 'MiniProgramName',
        'modifier' => 'Modifier',
        'platform' => 'Platform',
        'sceneId' => 'SceneId',
        'sceneName' => 'SceneName',
        'status' => 'Status',
        'storeImage' => 'StoreImage',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->bindMiniProgram) {
            $res['BindMiniProgram'] = $this->bindMiniProgram;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->miniProgramName) {
            $res['MiniProgramName'] = $this->miniProgramName;
        }

        if (null !== $this->modifier) {
            $res['Modifier'] = $this->modifier;
        }

        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }

        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }

        if (null !== $this->sceneName) {
            $res['SceneName'] = $this->sceneName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->storeImage) {
            $res['StoreImage'] = $this->storeImage;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['BindMiniProgram'])) {
            $model->bindMiniProgram = $map['BindMiniProgram'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['MiniProgramName'])) {
            $model->miniProgramName = $map['MiniProgramName'];
        }

        if (isset($map['Modifier'])) {
            $model->modifier = $map['Modifier'];
        }

        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }

        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }

        if (isset($map['SceneName'])) {
            $model->sceneName = $map['SceneName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StoreImage'])) {
            $model->storeImage = $map['StoreImage'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
