<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class ListDlpOutboundLogsRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $logId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $policyAction;

    /**
     * @var string
     */
    public $srcFileName;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $subChannelType;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'endTime' => 'EndTime',
        'logId' => 'LogId',
        'pageSize' => 'PageSize',
        'policyAction' => 'PolicyAction',
        'srcFileName' => 'SrcFileName',
        'startTime' => 'StartTime',
        'subChannelType' => 'SubChannelType',
        'userName' => 'UserName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->logId) {
            $res['LogId'] = $this->logId;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->policyAction) {
            $res['PolicyAction'] = $this->policyAction;
        }

        if (null !== $this->srcFileName) {
            $res['SrcFileName'] = $this->srcFileName;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->subChannelType) {
            $res['SubChannelType'] = $this->subChannelType;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['LogId'])) {
            $model->logId = $map['LogId'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PolicyAction'])) {
            $model->policyAction = $map['PolicyAction'];
        }

        if (isset($map['SrcFileName'])) {
            $model->srcFileName = $map['SrcFileName'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['SubChannelType'])) {
            $model->subChannelType = $map['SubChannelType'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
