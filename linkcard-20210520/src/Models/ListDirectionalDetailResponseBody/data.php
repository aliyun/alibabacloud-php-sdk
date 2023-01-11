<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkcard\V20210520\Models\ListDirectionalDetailResponseBody;

use AlibabaCloud\SDK\Linkcard\V20210520\Models\ListDirectionalDetailResponseBody\data\paginationResult;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 5
     *
     * @var int
     */
    public $directionalGroupId;

    /**
     * @var string
     */
    public $directionalName;

    /**
     * @var paginationResult
     */
    public $paginationResult;
    protected $_name = [
        'directionalGroupId' => 'DirectionalGroupId',
        'directionalName'    => 'DirectionalName',
        'paginationResult'   => 'PaginationResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->directionalGroupId) {
            $res['DirectionalGroupId'] = $this->directionalGroupId;
        }
        if (null !== $this->directionalName) {
            $res['DirectionalName'] = $this->directionalName;
        }
        if (null !== $this->paginationResult) {
            $res['PaginationResult'] = null !== $this->paginationResult ? $this->paginationResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DirectionalGroupId'])) {
            $model->directionalGroupId = $map['DirectionalGroupId'];
        }
        if (isset($map['DirectionalName'])) {
            $model->directionalName = $map['DirectionalName'];
        }
        if (isset($map['PaginationResult'])) {
            $model->paginationResult = paginationResult::fromMap($map['PaginationResult']);
        }

        return $model;
    }
}
