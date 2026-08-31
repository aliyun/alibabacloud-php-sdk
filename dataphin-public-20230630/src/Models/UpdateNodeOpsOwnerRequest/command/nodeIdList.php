<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateNodeOpsOwnerRequest\command;

use AlibabaCloud\Dara\Model;

class nodeIdList extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $nodeFromType;

    /**
     * @var string
     */
    public $nodeType;
    protected $_name = [
        'id' => 'Id',
        'nodeFromType' => 'NodeFromType',
        'nodeType' => 'NodeType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->nodeFromType) {
            $res['NodeFromType'] = $this->nodeFromType;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['NodeFromType'])) {
            $model->nodeFromType = $map['NodeFromType'];
        }

        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }

        return $model;
    }
}
