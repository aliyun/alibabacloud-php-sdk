<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class QueryEmbeddedStatusRequest extends Model
{
    /**
     * @description The work ID of the query.
     *
     * This parameter is required.
     * @example 95296e95-ca89-4c7d-8af9-dedf0ad0****
     *
     * @var string
     */
    public $worksId;
    protected $_name = [
        'worksId' => 'WorksId',
    ];

    public function validate()
    {
    }

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
     * @return QueryEmbeddedStatusRequest
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
