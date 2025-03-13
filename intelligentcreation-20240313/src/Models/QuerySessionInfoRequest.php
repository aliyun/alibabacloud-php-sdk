<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class QuerySessionInfoRequest extends Model
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
     * @var string[]
     */
    public $statusList;
    protected $_name = [
        'pageNo'     => 'pageNo',
        'pageSize'   => 'pageSize',
        'projectId'  => 'projectId',
        'statusList' => 'statusList',
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
        if (null !== $this->statusList) {
            $res['statusList'] = $this->statusList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySessionInfoRequest
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
            if (!empty($map['statusList'])) {
                $model->statusList = $map['statusList'];
            }
        }

        return $model;
    }
}
