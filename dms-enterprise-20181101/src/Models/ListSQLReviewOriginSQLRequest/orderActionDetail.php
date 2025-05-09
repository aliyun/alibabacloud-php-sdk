<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSQLReviewOriginSQLRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSQLReviewOriginSQLRequest\orderActionDetail\page;

class orderActionDetail extends Model
{
    /**
     * @var string
     */
    public $checkStatusResult;

    /**
     * @var int
     */
    public $fileId;

    /**
     * @var page
     */
    public $page;

    /**
     * @var string
     */
    public $SQLReviewResult;
    protected $_name = [
        'checkStatusResult' => 'CheckStatusResult',
        'fileId' => 'FileId',
        'page' => 'Page',
        'SQLReviewResult' => 'SQLReviewResult',
    ];

    public function validate()
    {
        if (null !== $this->page) {
            $this->page->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkStatusResult) {
            $res['CheckStatusResult'] = $this->checkStatusResult;
        }

        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }

        if (null !== $this->page) {
            $res['Page'] = null !== $this->page ? $this->page->toArray($noStream) : $this->page;
        }

        if (null !== $this->SQLReviewResult) {
            $res['SQLReviewResult'] = $this->SQLReviewResult;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckStatusResult'])) {
            $model->checkStatusResult = $map['CheckStatusResult'];
        }

        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }

        if (isset($map['Page'])) {
            $model->page = page::fromMap($map['Page']);
        }

        if (isset($map['SQLReviewResult'])) {
            $model->SQLReviewResult = $map['SQLReviewResult'];
        }

        return $model;
    }
}
