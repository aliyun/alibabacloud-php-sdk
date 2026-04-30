<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class SearchTableAssetKnowledgeRequest extends Model
{
    /**
     * @var int
     */
    public $dbId;

    /**
     * @var int
     */
    public $offset;

    /**
     * @var string
     */
    public $searchKey;

    /**
     * @var string
     */
    public $showType;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $tableName;
    protected $_name = [
        'dbId' => 'DbId',
        'offset' => 'Offset',
        'searchKey' => 'SearchKey',
        'showType' => 'ShowType',
        'size' => 'Size',
        'tableName' => 'TableName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }

        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }

        if (null !== $this->searchKey) {
            $res['SearchKey'] = $this->searchKey;
        }

        if (null !== $this->showType) {
            $res['ShowType'] = $this->showType;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
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
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }

        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }

        if (isset($map['SearchKey'])) {
            $model->searchKey = $map['SearchKey'];
        }

        if (isset($map['ShowType'])) {
            $model->showType = $map['ShowType'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
