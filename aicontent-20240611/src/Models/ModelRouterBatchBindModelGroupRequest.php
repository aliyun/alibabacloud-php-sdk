<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class ModelRouterBatchBindModelGroupRequest extends Model
{
    /**
     * @var string
     */
    public $allowedModelGroupConfig;

    /**
     * @var int[]
     */
    public $clientIdList;
    protected $_name = [
        'allowedModelGroupConfig' => 'allowedModelGroupConfig',
        'clientIdList' => 'clientIdList',
    ];

    public function validate()
    {
        if (\is_array($this->clientIdList)) {
            Model::validateArray($this->clientIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowedModelGroupConfig) {
            $res['allowedModelGroupConfig'] = $this->allowedModelGroupConfig;
        }

        if (null !== $this->clientIdList) {
            if (\is_array($this->clientIdList)) {
                $res['clientIdList'] = [];
                $n1 = 0;
                foreach ($this->clientIdList as $item1) {
                    $res['clientIdList'][$n1] = $item1;
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
        if (isset($map['allowedModelGroupConfig'])) {
            $model->allowedModelGroupConfig = $map['allowedModelGroupConfig'];
        }

        if (isset($map['clientIdList'])) {
            if (!empty($map['clientIdList'])) {
                $model->clientIdList = [];
                $n1 = 0;
                foreach ($map['clientIdList'] as $item1) {
                    $model->clientIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
