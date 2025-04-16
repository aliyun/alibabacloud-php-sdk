<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetNodeUpDownStreamRequest;

use AlibabaCloud\Dara\Model;

class nodeId extends Model
{
    /**
     * @var string
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FieldIdList'])) {
            $model->fieldIdList = $map['FieldIdList'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
