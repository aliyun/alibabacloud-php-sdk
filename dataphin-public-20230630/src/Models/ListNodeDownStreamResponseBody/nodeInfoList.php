<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListNodeDownStreamResponseBody;

use AlibabaCloud\Tea\Model;

class nodeInfoList extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $depth;

    /**
     * @var string[]
     */
    public $fieldIdList;

    /**
     * @example n_2423351
     *
     * @var string
     */
    public $id;

    /**
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
        'depth' => 'Depth',
        'fieldIdList' => 'FieldIdList',
        'id' => 'Id',
        'name' => 'Name',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->depth) {
            $res['Depth'] = $this->depth;
        }
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
     * @return nodeInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Depth'])) {
            $model->depth = $map['Depth'];
        }
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
