<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ListLogicalModelsResponseBody\data\items;

use AlibabaCloud\Dara\Model;

class deployment extends Model
{
    /**
     * @var string
     */
    public $operationId;

    /**
     * @var int
     */
    public $revision;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'operationId' => 'operationId',
        'revision' => 'revision',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->operationId) {
            $res['operationId'] = $this->operationId;
        }

        if (null !== $this->revision) {
            $res['revision'] = $this->revision;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['operationId'])) {
            $model->operationId = $map['operationId'];
        }

        if (isset($map['revision'])) {
            $model->revision = $map['revision'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
