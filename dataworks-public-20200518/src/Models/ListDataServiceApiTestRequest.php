<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListDataServiceApiTestRequest extends Model
{
    /**
     * @description The ID of the DataService Studio API on which tests are performed.
     *
     * This parameter is required.
     * @example 12345
     *
     * @var int
     */
    public $apiId;

    /**
     * @description The number of entries to return on each page. Maximum value: 100.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'apiId'    => 'ApiId',
        'pageSize' => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDataServiceApiTestRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
