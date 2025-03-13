<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class QuerySessionInfoShrinkRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 805800890535673856
     *
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $statusListShrink;
    protected $_name = [
        'pageNo'           => 'pageNo',
        'pageSize'         => 'pageSize',
        'projectId'        => 'projectId',
        'statusListShrink' => 'statusList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNo) {
            $res['pageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->projectId) {
            $res['projectId'] = $this->projectId;
        }
        if (null !== $this->statusListShrink) {
            $res['statusList'] = $this->statusListShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySessionInfoShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['pageNo'])) {
            $model->pageNo = $map['pageNo'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['projectId'])) {
            $model->projectId = $map['projectId'];
        }
        if (isset($map['statusList'])) {
            $model->statusListShrink = $map['statusList'];
        }

        return $model;
    }
}
