<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class ModelRouterBatchSetMemberAuthorizationRequest extends Model
{
    /**
     * @var string
     */
    public $allowedModelGroupConfig;

    /**
     * @var int[]
     */
    public $userIdList;
    protected $_name = [
        'allowedModelGroupConfig' => 'allowedModelGroupConfig',
        'userIdList' => 'userIdList',
    ];

    public function validate()
    {
        if (\is_array($this->userIdList)) {
            Model::validateArray($this->userIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowedModelGroupConfig) {
            $res['allowedModelGroupConfig'] = $this->allowedModelGroupConfig;
        }

        if (null !== $this->userIdList) {
            if (\is_array($this->userIdList)) {
                $res['userIdList'] = [];
                $n1 = 0;
                foreach ($this->userIdList as $item1) {
                    $res['userIdList'][$n1] = $item1;
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

        if (isset($map['userIdList'])) {
            if (!empty($map['userIdList'])) {
                $model->userIdList = [];
                $n1 = 0;
                foreach ($map['userIdList'] as $item1) {
                    $model->userIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
