<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetInstanceUpDownStreamResponseBody\instanceDagInfo;

use AlibabaCloud\Dara\Model;

class upInstanceList extends Model
{
    /**
     * @var string[]
     */
    public $fieldInstanceIdList;

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
    public $nodeId;

    /**
     * @var string
     */
    public $nodeType;
    protected $_name = [
        'fieldInstanceIdList' => 'FieldInstanceIdList',
        'id' => 'Id',
        'name' => 'Name',
        'nodeId' => 'NodeId',
        'nodeType' => 'NodeType',
    ];

    public function validate()
    {
        if (\is_array($this->fieldInstanceIdList)) {
            Model::validateArray($this->fieldInstanceIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fieldInstanceIdList) {
            if (\is_array($this->fieldInstanceIdList)) {
                $res['FieldInstanceIdList'] = [];
                $n1 = 0;
                foreach ($this->fieldInstanceIdList as $item1) {
                    $res['FieldInstanceIdList'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FieldInstanceIdList'])) {
            if (!empty($map['FieldInstanceIdList'])) {
                $model->fieldInstanceIdList = [];
                $n1 = 0;
                foreach ($map['FieldInstanceIdList'] as $item1) {
                    $model->fieldInstanceIdList[$n1++] = $item1;
                }
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
