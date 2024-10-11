<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateNodeSupplementRequest\createCommand;

use AlibabaCloud\Tea\Model;

class downStreamNodeIdList extends Model
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
        'id'          => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fieldIdList) {
            $res['FieldIdList'] = $this->fieldIdList;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return downStreamNodeIdList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FieldIdList'])) {
            if (!empty($map['FieldIdList'])) {
                $model->fieldIdList = $map['FieldIdList'];
            }
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
