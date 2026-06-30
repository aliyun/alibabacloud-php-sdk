<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetAgentTaskResultResponseBody\data\response;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetAgentTaskResultResponseBody\data\response\fieldResponse\fieldVoList;

class fieldResponse extends Model
{
    /**
     * @var fieldVoList[]
     */
    public $fieldVoList;
    protected $_name = [
        'fieldVoList' => 'FieldVoList',
    ];

    public function validate()
    {
        if (\is_array($this->fieldVoList)) {
            Model::validateArray($this->fieldVoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fieldVoList) {
            if (\is_array($this->fieldVoList)) {
                $res['FieldVoList'] = [];
                $n1 = 0;
                foreach ($this->fieldVoList as $item1) {
                    $res['FieldVoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FieldVoList'])) {
            if (!empty($map['FieldVoList'])) {
                $model->fieldVoList = [];
                $n1 = 0;
                foreach ($map['FieldVoList'] as $item1) {
                    $model->fieldVoList[$n1] = fieldVoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
