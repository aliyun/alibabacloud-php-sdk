<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListPipelineRelationsResponseBody;

use AlibabaCloud\Tea\Model;

class pipelineRelations extends Model
{
    /**
     * @example 12234
     *
     * @var int
     */
    public $refObjectId;
    protected $_name = [
        'refObjectId' => 'refObjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->refObjectId) {
            $res['refObjectId'] = $this->refObjectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pipelineRelations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['refObjectId'])) {
            $model->refObjectId = $map['refObjectId'];
        }

        return $model;
    }
}
