<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;

class DeletePipelineRelationsRequest extends Model
{
    /**
     * @var string
     */
    public $relObjectId;
    /**
     * @var string
     */
    public $relObjectType;
    protected $_name = [
        'relObjectId'   => 'relObjectId',
        'relObjectType' => 'relObjectType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->relObjectId) {
            $res['relObjectId'] = $this->relObjectId;
        }

        if (null !== $this->relObjectType) {
            $res['relObjectType'] = $this->relObjectType;
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
        if (isset($map['relObjectId'])) {
            $model->relObjectId = $map['relObjectId'];
        }

        if (isset($map['relObjectType'])) {
            $model->relObjectType = $map['relObjectType'];
        }

        return $model;
    }
}
