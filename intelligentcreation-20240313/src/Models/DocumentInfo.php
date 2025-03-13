<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class DocumentInfo extends Model
{
    /**
     * @var string
     */
    public $documentType;

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
    public $processStatus;
    protected $_name = [
        'documentType'  => 'documentType',
        'id'            => 'id',
        'name'          => 'name',
        'processStatus' => 'processStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->documentType) {
            $res['documentType'] = $this->documentType;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->processStatus) {
            $res['processStatus'] = $this->processStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DocumentInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['documentType'])) {
            $model->documentType = $map['documentType'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['processStatus'])) {
            $model->processStatus = $map['processStatus'];
        }

        return $model;
    }
}
