<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetInstanceUpDownStreamResponseBody\instanceDagInfo;

use AlibabaCloud\Tea\Model;

class startInstanceList extends Model
{
    /**
     * @var string[]
     */
    public $fieldInstanceIdList;

    /**
     * @example t_1234567
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
     * @example n_1234567
     *
     * @var string
     */
    public $nodeId;

    /**
     * @example DATA_PROCESS
     *
     * @var string
     */
    public $nodeType;
    protected $_name = [
        'fieldInstanceIdList' => 'FieldInstanceIdList',
        'id'                  => 'Id',
        'name'                => 'Name',
        'nodeId'              => 'NodeId',
        'nodeType'            => 'NodeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fieldInstanceIdList) {
            $res['FieldInstanceIdList'] = $this->fieldInstanceIdList;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return startInstanceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FieldInstanceIdList'])) {
            if (!empty($map['FieldInstanceIdList'])) {
                $model->fieldInstanceIdList = $map['FieldInstanceIdList'];
            }
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }

        return $model;
    }
}
