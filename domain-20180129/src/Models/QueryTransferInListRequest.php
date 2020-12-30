<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class QueryTransferInListRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $userClientIp;

    /**
     * @var int
     */
    public $submissionStartDate;

    /**
     * @var int
     */
    public $submissionEndDate;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $simpleTransferInStatus;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'lang'                   => 'Lang',
        'userClientIp'           => 'UserClientIp',
        'submissionStartDate'    => 'SubmissionStartDate',
        'submissionEndDate'      => 'SubmissionEndDate',
        'domainName'             => 'DomainName',
        'simpleTransferInStatus' => 'SimpleTransferInStatus',
        'pageNum'                => 'PageNum',
        'pageSize'               => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }
        if (null !== $this->submissionStartDate) {
            $res['SubmissionStartDate'] = $this->submissionStartDate;
        }
        if (null !== $this->submissionEndDate) {
            $res['SubmissionEndDate'] = $this->submissionEndDate;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->simpleTransferInStatus) {
            $res['SimpleTransferInStatus'] = $this->simpleTransferInStatus;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }
        if (isset($map['SubmissionStartDate'])) {
            $model->submissionStartDate = $map['SubmissionStartDate'];
        }
        if (isset($map['SubmissionEndDate'])) {
            $model->submissionEndDate = $map['SubmissionEndDate'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['SimpleTransferInStatus'])) {
            $model->simpleTransferInStatus = $map['SimpleTransferInStatus'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
