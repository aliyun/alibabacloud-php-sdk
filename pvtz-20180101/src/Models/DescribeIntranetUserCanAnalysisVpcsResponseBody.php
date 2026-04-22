<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeIntranetUserCanAnalysisVpcsResponseBody\userCanAnalysisVpcsPopResults;

class DescribeIntranetUserCanAnalysisVpcsResponseBody extends Model
{
    /**
     * @var int
     */
    public $curPage;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalPage;

    /**
     * @var int
     */
    public $totalSize;

    /**
     * @var userCanAnalysisVpcsPopResults
     */
    public $userCanAnalysisVpcsPopResults;
    protected $_name = [
        'curPage' => 'CurPage',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalPage' => 'TotalPage',
        'totalSize' => 'TotalSize',
        'userCanAnalysisVpcsPopResults' => 'UserCanAnalysisVpcsPopResults',
    ];

    public function validate()
    {
        if (null !== $this->userCanAnalysisVpcsPopResults) {
            $this->userCanAnalysisVpcsPopResults->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->curPage) {
            $res['CurPage'] = $this->curPage;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalPage) {
            $res['TotalPage'] = $this->totalPage;
        }

        if (null !== $this->totalSize) {
            $res['TotalSize'] = $this->totalSize;
        }

        if (null !== $this->userCanAnalysisVpcsPopResults) {
            $res['UserCanAnalysisVpcsPopResults'] = null !== $this->userCanAnalysisVpcsPopResults ? $this->userCanAnalysisVpcsPopResults->toArray($noStream) : $this->userCanAnalysisVpcsPopResults;
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
        if (isset($map['CurPage'])) {
            $model->curPage = $map['CurPage'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalPage'])) {
            $model->totalPage = $map['TotalPage'];
        }

        if (isset($map['TotalSize'])) {
            $model->totalSize = $map['TotalSize'];
        }

        if (isset($map['UserCanAnalysisVpcsPopResults'])) {
            $model->userCanAnalysisVpcsPopResults = userCanAnalysisVpcsPopResults::fromMap($map['UserCanAnalysisVpcsPopResults']);
        }

        return $model;
    }
}
