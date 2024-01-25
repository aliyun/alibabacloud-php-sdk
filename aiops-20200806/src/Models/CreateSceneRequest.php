<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class CreateSceneRequest extends Model
{
    /**
     * @var string
     */
    public $flowName;

    /**
     * @var string
     */
    public $metricListJson;

    /**
     * @var string
     */
    public $nodeListJson;

    /**
     * @var string
     */
    public $operaUid;

    /**
     * @var string
     */
    public $sceneDesc;

    /**
     * @var string
     */
    public $sceneName;

    /**
     * @var string
     */
    public $sceneOwner;

    /**
     * @var string
     */
    public $sceneWebhook;
    protected $_name = [
        'flowName'       => 'FlowName',
        'metricListJson' => 'MetricListJson',
        'nodeListJson'   => 'NodeListJson',
        'operaUid'       => 'OperaUid',
        'sceneDesc'      => 'SceneDesc',
        'sceneName'      => 'SceneName',
        'sceneOwner'     => 'SceneOwner',
        'sceneWebhook'   => 'SceneWebhook',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }
        if (null !== $this->metricListJson) {
            $res['MetricListJson'] = $this->metricListJson;
        }
        if (null !== $this->nodeListJson) {
            $res['NodeListJson'] = $this->nodeListJson;
        }
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
        }
        if (null !== $this->sceneDesc) {
            $res['SceneDesc'] = $this->sceneDesc;
        }
        if (null !== $this->sceneName) {
            $res['SceneName'] = $this->sceneName;
        }
        if (null !== $this->sceneOwner) {
            $res['SceneOwner'] = $this->sceneOwner;
        }
        if (null !== $this->sceneWebhook) {
            $res['SceneWebhook'] = $this->sceneWebhook;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSceneRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }
        if (isset($map['MetricListJson'])) {
            $model->metricListJson = $map['MetricListJson'];
        }
        if (isset($map['NodeListJson'])) {
            $model->nodeListJson = $map['NodeListJson'];
        }
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }
        if (isset($map['SceneDesc'])) {
            $model->sceneDesc = $map['SceneDesc'];
        }
        if (isset($map['SceneName'])) {
            $model->sceneName = $map['SceneName'];
        }
        if (isset($map['SceneOwner'])) {
            $model->sceneOwner = $map['SceneOwner'];
        }
        if (isset($map['SceneWebhook'])) {
            $model->sceneWebhook = $map['SceneWebhook'];
        }

        return $model;
    }
}
