<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class ListTextbookAssistantSceneDetailsRequest extends Model
{
    /**
     * @var string
     */
    public $authToken;

    /**
     * @var string[]
     */
    public $sceneIdList;
    protected $_name = [
        'authToken' => 'authToken',
        'sceneIdList' => 'sceneIdList',
    ];

    public function validate()
    {
        if (\is_array($this->sceneIdList)) {
            Model::validateArray($this->sceneIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authToken) {
            $res['authToken'] = $this->authToken;
        }

        if (null !== $this->sceneIdList) {
            if (\is_array($this->sceneIdList)) {
                $res['sceneIdList'] = [];
                $n1 = 0;
                foreach ($this->sceneIdList as $item1) {
                    $res['sceneIdList'][$n1++] = $item1;
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
        if (isset($map['authToken'])) {
            $model->authToken = $map['authToken'];
        }

        if (isset($map['sceneIdList'])) {
            if (!empty($map['sceneIdList'])) {
                $model->sceneIdList = [];
                $n1 = 0;
                foreach ($map['sceneIdList'] as $item1) {
                    $model->sceneIdList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
