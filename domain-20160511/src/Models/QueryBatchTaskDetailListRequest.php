<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20160511\Models;

use AlibabaCloud\Dara\Model;

class QueryBatchTaskDetailListRequest extends Model
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
    public $saleId;

    /**
     * @var string
     */
    public $taskNo;

    /**
     * @var int
     */
    public $taskStatus;

    /**
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'domainName' => 'DomainName',
        'lang' => 'Lang',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'saleId' => 'SaleId',
        'taskNo' => 'TaskNo',
        'taskStatus' => 'TaskStatus',
        'userClientIp' => 'UserClientIp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->saleId) {
            $res['SaleId'] = $this->saleId;
        }

        if (null !== $this->taskNo) {
            $res['TaskNo'] = $this->taskNo;
        }

        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }

        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
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

        if (isset($map['SaleId'])) {
            $model->saleId = $map['SaleId'];
        }

        if (isset($map['TaskNo'])) {
            $model->taskNo = $map['TaskNo'];
        }

        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}
