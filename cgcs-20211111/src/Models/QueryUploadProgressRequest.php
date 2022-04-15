<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\Tea\Model;

class QueryUploadProgressRequest extends Model
{
    /**
     * @var string
     */
    public $queryUploadProgressRequests;
    protected $_name = [
        'queryUploadProgressRequests' => 'QueryUploadProgressRequests',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->queryUploadProgressRequests) {
            $res['QueryUploadProgressRequests'] = $this->queryUploadProgressRequests;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryUploadProgressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QueryUploadProgressRequests'])) {
            $model->queryUploadProgressRequests = $map['QueryUploadProgressRequests'];
        }

        return $model;
    }
}
