<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class BatchOperateCommonOverallConfigRequest extends Model
{
    /**
     * @var string
     */
    public $config;
    /**
     * @var string[]
     */
    public $typeList;
    protected $_name = [
        'config'   => 'Config',
        'typeList' => 'TypeList',
    ];

    public function validate()
    {
        if (\is_array($this->typeList)) {
            Model::validateArray($this->typeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }

        if (null !== $this->typeList) {
            if (\is_array($this->typeList)) {
                $res['TypeList'] = [];
                $n1              = 0;
                foreach ($this->typeList as $item1) {
                    $res['TypeList'][$n1++] = $item1;
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
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }

        if (isset($map['TypeList'])) {
            if (!empty($map['TypeList'])) {
                $model->typeList = [];
                $n1              = 0;
                foreach ($map['TypeList'] as $item1) {
                    $model->typeList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
