<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class QueryWorksBloodRelationshipRequest extends Model
{
    /**
     * @description The ID of the data work.
     *
     * This parameter is required.
     *
     * @example abcd****
     *
     * @var string
     */
    public $worksId;
    protected $_name = [
        'worksId' => 'WorksId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->worksId) {
            $res['WorksId'] = $this->worksId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryWorksBloodRelationshipRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WorksId'])) {
            $model->worksId = $map['WorksId'];
        }

        return $model;
    }
}
