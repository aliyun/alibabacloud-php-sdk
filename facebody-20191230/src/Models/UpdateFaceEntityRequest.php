<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Dara\Model;

class UpdateFaceEntityRequest extends Model
{
    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $entityId;

    /**
     * @var string
     */
    public $labels;
    protected $_name = [
        'dbName' => 'DbName',
        'entityId' => 'EntityId',
        'labels' => 'Labels',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }

        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }

        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
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
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }

        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }

        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }

        return $model;
    }
}
