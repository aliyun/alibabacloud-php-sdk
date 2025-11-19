<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models;

use AlibabaCloud\Dara\Model;

class CreateDesktopImageRequest extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var bool
     */
    public $autoCleanUserData;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $desktopId;

    /**
     * @var string
     */
    public $diskType;

    /**
     * @var bool
     */
    public $enableStartUpConfig;

    /**
     * @var string
     */
    public $imageName;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string[]
     */
    public $startUpFilePathList;
    protected $_name = [
        'apiKey' => 'ApiKey',
        'autoCleanUserData' => 'AutoCleanUserData',
        'description' => 'Description',
        'desktopId' => 'DesktopId',
        'diskType' => 'DiskType',
        'enableStartUpConfig' => 'EnableStartUpConfig',
        'imageName' => 'ImageName',
        'sessionId' => 'SessionId',
        'startUpFilePathList' => 'StartUpFilePathList',
    ];

    public function validate()
    {
        if (\is_array($this->startUpFilePathList)) {
            Model::validateArray($this->startUpFilePathList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['ApiKey'] = $this->apiKey;
        }

        if (null !== $this->autoCleanUserData) {
            $res['AutoCleanUserData'] = $this->autoCleanUserData;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }

        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }

        if (null !== $this->enableStartUpConfig) {
            $res['EnableStartUpConfig'] = $this->enableStartUpConfig;
        }

        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->startUpFilePathList) {
            if (\is_array($this->startUpFilePathList)) {
                $res['StartUpFilePathList'] = [];
                $n1 = 0;
                foreach ($this->startUpFilePathList as $item1) {
                    $res['StartUpFilePathList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ApiKey'])) {
            $model->apiKey = $map['ApiKey'];
        }

        if (isset($map['AutoCleanUserData'])) {
            $model->autoCleanUserData = $map['AutoCleanUserData'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }

        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }

        if (isset($map['EnableStartUpConfig'])) {
            $model->enableStartUpConfig = $map['EnableStartUpConfig'];
        }

        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['StartUpFilePathList'])) {
            if (!empty($map['StartUpFilePathList'])) {
                $model->startUpFilePathList = [];
                $n1 = 0;
                foreach ($map['StartUpFilePathList'] as $item1) {
                    $model->startUpFilePathList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
