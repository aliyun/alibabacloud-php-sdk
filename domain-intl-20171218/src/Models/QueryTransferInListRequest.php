<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domainintl\V20171218\Models;

use AlibabaCloud\Tea\Model;

class QueryTransferInListRequest extends Model
{
    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $simpleTransferInStatus;

    /**
     * @var int
     */
    public $submissionEndDate;

    /**
     * @var int
     */
    public $submissionStartDate;

    /**
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
