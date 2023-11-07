<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class QueryTransferInListRequest extends Model
{
    /**
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example INIT
     *
     * @var string
     */
    public $simpleTransferInStatus;

    /**
     * @example 1514428524669
     *
     * @var int
     */
    public $submissionEndDate;

    /**
     * @example 1514428524669
     *
     * @var int
     */
    public $submissionStartDate;

    /**
     * @example 127.0.0.1
     *
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'domainName'             => 'DomainName',
        'lang'                   => 'Lang',
        'pageNum'                => 'PageNum',
        'pageSize'               => 'PageSize',
        'simpleTransferInStatus' => 'SimpleTransferInStatus',
        'submissionEndDate'      => 'SubmissionEndDate',
        'submissionStartDate'    => 'SubmissionStartDate',
        'userClientIp'           => 'UserClientIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->simpleTransferInStatus) {
            $res['SimpleTransferInStatus'] = $this->simpleTransferInStatus;
        }
        if (null !== $this->submissionEndDate) {
            $res['SubmissionEndDate'] = $this->submissionEndDate;
        }
        if (null !== $this->submissionStartDate) {
            $res['SubmissionStartDate'] = $this->submissionStartDate;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryTransferInListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SimpleTransferInStatus'])) {
            $model->simpleTransferInStatus = $map['SimpleTransferInStatus'];
        }
        if (isset($map['SubmissionEndDate'])) {
            $model->submissionEndDate = $map['SubmissionEndDate'];
        }
        if (isset($map['SubmissionStartDate'])) {
            $model->submissionStartDate = $map['SubmissionStartDate'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}
