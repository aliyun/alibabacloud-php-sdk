<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class ConfigRuntimeModelTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $modelTemplateId;

    /**
     * @var string[]
     */
    public $runtimeIds;

    /**
     * @var string
     */
    public $runtimeType;
    protected $_name = [
        'modelTemplateId' => 'ModelTemplateId',
        'runtimeIds' => 'RuntimeIds',
        'runtimeType' => 'RuntimeType',
    ];

    public function validate()
    {
        if (\is_array($this->runtimeIds)) {
            Model::validateArray($this->runtimeIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modelTemplateId) {
            $res['ModelTemplateId'] = $this->modelTemplateId;
        }

        if (null !== $this->runtimeIds) {
            if (\is_array($this->runtimeIds)) {
                $res['RuntimeIds'] = [];
                $n1 = 0;
                foreach ($this->runtimeIds as $item1) {
                    $res['RuntimeIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->runtimeType) {
            $res['RuntimeType'] = $this->runtimeType;
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
        if (isset($map['ModelTemplateId'])) {
            $model->modelTemplateId = $map['ModelTemplateId'];
        }

        if (isset($map['RuntimeIds'])) {
            if (!empty($map['RuntimeIds'])) {
                $model->runtimeIds = [];
                $n1 = 0;
                foreach ($map['RuntimeIds'] as $item1) {
                    $model->runtimeIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RuntimeType'])) {
            $model->runtimeType = $map['RuntimeType'];
        }

        return $model;
    }
}
