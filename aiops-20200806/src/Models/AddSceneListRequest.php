<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class AddSceneListRequest extends Model
{
    /**
     * @var string
     */
    public $operaUid;

    /**
     * @var string
     */
    public $sceneDescribe;

    /**
     * @var string
     */
    public $sceneName;

    /**
     * @var string
     */
    public $scenePersonLiable;

    /**
     * @var string
     */
    public $sceneType;

    /**
     * @var string
     */
    public $sceneVoJson;

    /**
     * @var string
     */
    public $webhook;
    protected $_name = [
        'operaUid'          => 'OperaUid',
        'sceneDescribe'     => 'SceneDescribe',
        'sceneName'         => 'SceneName',
        'scenePersonLiable' => 'ScenePersonLiable',
        'sceneType'         => 'SceneType',
        'sceneVoJson'       => 'SceneVoJson',
        'webhook'           => 'Webhook',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
        }
        if (null !== $this->sceneDescribe) {
            $res['SceneDescribe'] = $this->sceneDescribe;
        }
        if (null !== $this->sceneName) {
            $res['SceneName'] = $this->sceneName;
        }
        if (null !== $this->scenePersonLiable) {
            $res['ScenePersonLiable'] = $this->scenePersonLiable;
        }
        if (null !== $this->sceneType) {
            $res['SceneType'] = $this->sceneType;
        }
        if (null !== $this->sceneVoJson) {
            $res['SceneVoJson'] = $this->sceneVoJson;
        }
        if (null !== $this->webhook) {
            $res['Webhook'] = $this->webhook;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddSceneListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }
        if (isset($map['SceneDescribe'])) {
            $model->sceneDescribe = $map['SceneDescribe'];
        }
        if (isset($map['SceneName'])) {
            $model->sceneName = $map['SceneName'];
        }
        if (isset($map['ScenePersonLiable'])) {
            $model->scenePersonLiable = $map['ScenePersonLiable'];
        }
        if (isset($map['SceneType'])) {
            $model->sceneType = $map['SceneType'];
        }
        if (isset($map['SceneVoJson'])) {
            $model->sceneVoJson = $map['SceneVoJson'];
        }
        if (isset($map['Webhook'])) {
            $model->webhook = $map['Webhook'];
        }

        return $model;
    }
}
