<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Dara\Model;

class UpdateAntCloudAuthSceneRequest extends Model
{
    /**
     * @var string
     */
    public $bindMiniProgram;

    /**
     * @var string
     */
    public $checkFileBody;

    /**
     * @var string
     */
    public $checkFileName;

    /**
     * @var string
     */
    public $deviceRiskPlus;

    /**
     * @var string
     */
    public $miniProgramName;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var int
     */
    public $returnPicCount;

    /**
     * @var int
     */
    public $returnVideoLength;

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
    protected $_name = [
        'bindMiniProgram' => 'BindMiniProgram',
        'checkFileBody' => 'CheckFileBody',
        'checkFileName' => 'CheckFileName',
        'deviceRiskPlus' => 'DeviceRiskPlus',
        'miniProgramName' => 'MiniProgramName',
        'platform' => 'Platform',
        'returnPicCount' => 'ReturnPicCount',
        'returnVideoLength' => 'ReturnVideoLength',
        'sceneId' => 'SceneId',
        'sceneName' => 'SceneName',
        'status' => 'Status',
        'storeImage' => 'StoreImage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindMiniProgram) {
            $res['BindMiniProgram'] = $this->bindMiniProgram;
        }

        if (null !== $this->checkFileBody) {
            $res['CheckFileBody'] = $this->checkFileBody;
        }

        if (null !== $this->checkFileName) {
            $res['CheckFileName'] = $this->checkFileName;
        }

        if (null !== $this->deviceRiskPlus) {
            $res['DeviceRiskPlus'] = $this->deviceRiskPlus;
        }

        if (null !== $this->miniProgramName) {
            $res['MiniProgramName'] = $this->miniProgramName;
        }

        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }

        if (null !== $this->returnPicCount) {
            $res['ReturnPicCount'] = $this->returnPicCount;
        }

        if (null !== $this->returnVideoLength) {
            $res['ReturnVideoLength'] = $this->returnVideoLength;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindMiniProgram'])) {
            $model->bindMiniProgram = $map['BindMiniProgram'];
        }

        if (isset($map['CheckFileBody'])) {
            $model->checkFileBody = $map['CheckFileBody'];
        }

        if (isset($map['CheckFileName'])) {
            $model->checkFileName = $map['CheckFileName'];
        }

        if (isset($map['DeviceRiskPlus'])) {
            $model->deviceRiskPlus = $map['DeviceRiskPlus'];
        }

        if (isset($map['MiniProgramName'])) {
            $model->miniProgramName = $map['MiniProgramName'];
        }

        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }

        if (isset($map['ReturnPicCount'])) {
            $model->returnPicCount = $map['ReturnPicCount'];
        }

        if (isset($map['ReturnVideoLength'])) {
            $model->returnVideoLength = $map['ReturnVideoLength'];
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

        return $model;
    }
}
