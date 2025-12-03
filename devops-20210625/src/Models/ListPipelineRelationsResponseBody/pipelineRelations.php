<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListPipelineRelationsResponseBody;

use AlibabaCloud\Dara\Model;

class pipelineRelations extends Model
{
    /**
     * @var int
     */
    public $refObjectId;
    protected $_name = [
        'refObjectId' => 'refObjectId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->refObjectId) {
            $res['refObjectId'] = $this->refObjectId;
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
        if (isset($map['refObjectId'])) {
            $model->refObjectId = $map['refObjectId'];
        }

        return $model;
    }
}
