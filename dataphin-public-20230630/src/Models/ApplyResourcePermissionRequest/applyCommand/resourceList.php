<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ApplyResourcePermissionRequest\applyCommand;

use AlibabaCloud\Dara\Model;

class resourceList extends Model
{
    /**
     * @var string[]
     */
    public $columnList;

    /**
     * @var string
     */
    public $resourceId;
    protected $_name = [
        'columnList' => 'ColumnList',
        'resourceId' => 'ResourceId',
    ];

    public function validate()
    {
        if (\is_array($this->columnList)) {
            Model::validateArray($this->columnList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columnList) {
            if (\is_array($this->columnList)) {
                $res['ColumnList'] = [];
                $n1 = 0;
                foreach ($this->columnList as $item1) {
                    $res['ColumnList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
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
        if (isset($map['ColumnList'])) {
            if (!empty($map['ColumnList'])) {
                $model->columnList = [];
                $n1 = 0;
                foreach ($map['ColumnList'] as $item1) {
                    $model->columnList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        return $model;
    }
}
