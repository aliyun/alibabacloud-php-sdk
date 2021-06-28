<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSQLReviewOriginSQLRequest;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSQLReviewOriginSQLRequest\orderActionDetail\page;
use AlibabaCloud\Tea\Model;

class orderActionDetail extends Model
{
    /**
     * @var int
     */
    public $fileId;

    /**
     * @var string
     */
    public $SQLReviewResult;

    /**
     * @var string
     */
    public $checkStatusResult;

    /**
     * @var page
     */
    public $page;
    protected $_name = [
        'fileId'            => 'FileId',
        'SQLReviewResult'   => 'SQLReviewResult',
        'checkStatusResult' => 'CheckStatusResult',
        'page'              => 'Page',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->SQLReviewResult) {
            $res['SQLReviewResult'] = $this->SQLReviewResult;
        }
        if (null !== $this->checkStatusResult) {
            $res['CheckStatusResult'] = $this->checkStatusResult;
        }
        if (null !== $this->page) {
            $res['Page'] = null !== $this->page ? $this->page->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return orderActionDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['SQLReviewResult'])) {
            $model->SQLReviewResult = $map['SQLReviewResult'];
        }
        if (isset($map['CheckStatusResult'])) {
            $model->checkStatusResult = $map['CheckStatusResult'];
        }
        if (isset($map['Page'])) {
            $model->page = page::fromMap($map['Page']);
        }

        return $model;
    }
}
