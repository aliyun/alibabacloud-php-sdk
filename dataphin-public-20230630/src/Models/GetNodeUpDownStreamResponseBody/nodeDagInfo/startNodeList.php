<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetNodeUpDownStreamResponseBody\nodeDagInfo;

use AlibabaCloud\Tea\Model;

class startNodeList extends Model
{
    /**
     * @var string[]
     */
    public $fieldIdList;

    /**
     * @example n_123456
     *
     * @var string
     */
    public $id;

    /**
     * @example xx测试
     *
     * @var string
     */
    public $name;

    /**
     * @example DATA_PROCESS
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'fieldIdList' => 'FieldIdList',
        'id'          => 'Id',
        'name'        => 'Name',
        'type'        => 'Type',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return startNodeList
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
