<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateNodeSupplementRequest\createCommand;

use AlibabaCloud\Dara\Model;

class nodeIdList extends Model
{
    /**
     * @var string[]
     */
    public $fieldIdList;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'fieldIdList' => 'FieldIdList',
        'id' => 'Id',
    ];

    public function validate()
    {
        if (\is_array($this->fieldIdList)) {
            Model::validateArray($this->fieldIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fieldIdList) {
            if (\is_array($this->fieldIdList)) {
                $res['FieldIdList'] = [];
                $n1 = 0;
                foreach ($this->fieldIdList as $item1) {
                    $res['FieldIdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['FieldIdList'])) {
            if (!empty($map['FieldIdList'])) {
                $model->fieldIdList = [];
                $n1 = 0;
                foreach ($map['FieldIdList'] as $item1) {
                    $model->fieldIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
