<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListNodeDownStreamResponseBody;

use AlibabaCloud\Dara\Model;

class nodeInfoList extends Model
{
    /**
     * @var int
     */
    public $depth;

    /**
     * @var string[]
     */
    public $fieldIdList;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'depth' => 'Depth',
        'fieldIdList' => 'FieldIdList',
        'id' => 'Id',
        'name' => 'Name',
        'type' => 'Type',
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
        if (null !== $this->depth) {
            $res['Depth'] = $this->depth;
        }

        if (null !== $this->fieldIdList) {
            if (\is_array($this->fieldIdList)) {
                $res['FieldIdList'] = [];
                $n1 = 0;
                foreach ($this->fieldIdList as $item1) {
                    $res['FieldIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Depth'])) {
            $model->depth = $map['Depth'];
        }

        if (isset($map['FieldIdList'])) {
            if (!empty($map['FieldIdList'])) {
                $model->fieldIdList = [];
                $n1 = 0;
                foreach ($map['FieldIdList'] as $item1) {
                    $model->fieldIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
