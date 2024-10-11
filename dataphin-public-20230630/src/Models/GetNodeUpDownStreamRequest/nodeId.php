<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetNodeUpDownStreamRequest;

use AlibabaCloud\Tea\Model;

class nodeId extends Model
{
    /**
     * @example 12
     *
     * @var string
     */
    public $fieldIdList;

    /**
     * @description This parameter is required.
     *
     * @example 11313
     *
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
     * @return nodeId
     */
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
