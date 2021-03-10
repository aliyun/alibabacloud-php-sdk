<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Afs\V20180112\Models\DescribePersonMachineListResponseBody\personMachineRes;

use AlibabaCloud\Tea\Model;

class personMachines extends Model
{
    /**
     * @var string
     */
    public $configurationName;

    /**
     * @var string
     */
    public $configurationMethod;

    /**
     * @var string
     */
    public $extId;

    /**
     * @var string
     */
    public $applyType;

    /**
     * @var string
     */
    public $lastUpdate;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var string
     */
    public $sceneOriginal;

    /**
     * @var string
     */
    public $appkey;
    protected $_name = [
        'configurationName'   => 'ConfigurationName',
        'configurationMethod' => 'ConfigurationMethod',
        'extId'               => 'ExtId',
        'applyType'           => 'ApplyType',
        'lastUpdate'          => 'LastUpdate',
        'scene'               => 'Scene',
        'sceneOriginal'       => 'SceneOriginal',
        'appkey'              => 'Appkey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configurationName) {
            $res['ConfigurationName'] = $this->configurationName;
        }
        if (null !== $this->configurationMethod) {
            $res['ConfigurationMethod'] = $this->configurationMethod;
        }
        if (null !== $this->extId) {
            $res['ExtId'] = $this->extId;
        }
        if (null !== $this->applyType) {
            $res['ApplyType'] = $this->applyType;
        }
        if (null !== $this->lastUpdate) {
            $res['LastUpdate'] = $this->lastUpdate;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->sceneOriginal) {
            $res['SceneOriginal'] = $this->sceneOriginal;
        }
        if (null !== $this->appkey) {
            $res['Appkey'] = $this->appkey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return personMachines
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigurationName'])) {
            $model->configurationName = $map['ConfigurationName'];
        }
        if (isset($map['ConfigurationMethod'])) {
            $model->configurationMethod = $map['ConfigurationMethod'];
        }
        if (isset($map['ExtId'])) {
            $model->extId = $map['ExtId'];
        }
        if (isset($map['ApplyType'])) {
            $model->applyType = $map['ApplyType'];
        }
        if (isset($map['LastUpdate'])) {
            $model->lastUpdate = $map['LastUpdate'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['SceneOriginal'])) {
            $model->sceneOriginal = $map['SceneOriginal'];
        }
        if (isset($map['Appkey'])) {
            $model->appkey = $map['Appkey'];
        }

        return $model;
    }
}
