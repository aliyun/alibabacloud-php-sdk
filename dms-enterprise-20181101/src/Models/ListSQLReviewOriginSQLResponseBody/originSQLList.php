<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSQLReviewOriginSQLResponseBody;

use AlibabaCloud\Tea\Model;

class originSQLList extends Model
{
    /**
     * @var string
     */
    public $checkStatus;

    /**
     * @var string
     */
    public $checkedTime;

    /**
     * @var int
     */
    public $fileId;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $reviewSummary;

    /**
     * @var string
     */
    public $SQLContent;

    /**
     * @var int
     */
    public $SQLId;

    /**
     * @var string
     */
    public $SQLName;

    /**
     * @var string
     */
    public $SQLReviewQueryKey;

    /**
     * @var string
     */
    public $sqlHash;

    /**
     * @var string
     */
    public $statusDesc;
    protected $_name = [
        'checkStatus'       => 'CheckStatus',
        'checkedTime'       => 'CheckedTime',
        'fileId'            => 'FileId',
        'fileName'          => 'FileName',
        'reviewSummary'     => 'ReviewSummary',
        'SQLContent'        => 'SQLContent',
        'SQLId'             => 'SQLId',
        'SQLName'           => 'SQLName',
        'SQLReviewQueryKey' => 'SQLReviewQueryKey',
        'sqlHash'           => 'SqlHash',
        'statusDesc'        => 'StatusDesc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkStatus) {
            $res['CheckStatus'] = $this->checkStatus;
        }
        if (null !== $this->checkedTime) {
            $res['CheckedTime'] = $this->checkedTime;
        }
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->reviewSummary) {
            $res['ReviewSummary'] = $this->reviewSummary;
        }
        if (null !== $this->SQLContent) {
            $res['SQLContent'] = $this->SQLContent;
        }
        if (null !== $this->SQLId) {
            $res['SQLId'] = $this->SQLId;
        }
        if (null !== $this->SQLName) {
            $res['SQLName'] = $this->SQLName;
        }
        if (null !== $this->SQLReviewQueryKey) {
            $res['SQLReviewQueryKey'] = $this->SQLReviewQueryKey;
        }
        if (null !== $this->sqlHash) {
            $res['SqlHash'] = $this->sqlHash;
        }
        if (null !== $this->statusDesc) {
            $res['StatusDesc'] = $this->statusDesc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return originSQLList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckStatus'])) {
            $model->checkStatus = $map['CheckStatus'];
        }
        if (isset($map['CheckedTime'])) {
            $model->checkedTime = $map['CheckedTime'];
        }
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['ReviewSummary'])) {
            $model->reviewSummary = $map['ReviewSummary'];
        }
        if (isset($map['SQLContent'])) {
            $model->SQLContent = $map['SQLContent'];
        }
        if (isset($map['SQLId'])) {
            $model->SQLId = $map['SQLId'];
        }
        if (isset($map['SQLName'])) {
            $model->SQLName = $map['SQLName'];
        }
        if (isset($map['SQLReviewQueryKey'])) {
            $model->SQLReviewQueryKey = $map['SQLReviewQueryKey'];
        }
        if (isset($map['SqlHash'])) {
            $model->sqlHash = $map['SqlHash'];
        }
        if (isset($map['StatusDesc'])) {
            $model->statusDesc = $map['StatusDesc'];
        }

        return $model;
    }
}
