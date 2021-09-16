<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class ListProblemDetailOperationsRequest extends Model
{
    /**
     * @description 幂等校验
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description 页
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 行
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 时间排序
     *
     * @var string
     */
    public $createTimeSort;

    /**
     * @description 故障id
     *
     * @var int
     */
    public $problemId;
    protected $_name = [
        'clientToken'    => 'clientToken',
        'pageNumber'     => 'pageNumber',
        'pageSize'       => 'pageSize',
        'createTimeSort' => 'createTimeSort',
        'problemId'      => 'problemId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->createTimeSort) {
            $res['createTimeSort'] = $this->createTimeSort;
        }
        if (null !== $this->problemId) {
            $res['problemId'] = $this->problemId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProblemDetailOperationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['createTimeSort'])) {
            $model->createTimeSort = $map['createTimeSort'];
        }
        if (isset($map['problemId'])) {
            $model->problemId = $map['problemId'];
        }

        return $model;
    }
}
