<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Buss\V20220822\Models\SearchPunishEventsResponseBody;

use AlibabaCloud\Tea\Model;

class dataList extends Model
{
    /**
     * @var string
     */
    public $bussinessCode;

    /**
     * @var string
     */
    public $caseCode;

    /**
     * @var int
     */
    public $recordsCount;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $tipsCode;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'bussinessCode' => 'BussinessCode',
        'caseCode'      => 'CaseCode',
        'recordsCount'  => 'RecordsCount',
        'resourceId'    => 'ResourceId',
        'tipsCode'      => 'TipsCode',
        'userId'        => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bussinessCode) {
            $res['BussinessCode'] = $this->bussinessCode;
        }
        if (null !== $this->caseCode) {
            $res['CaseCode'] = $this->caseCode;
        }
        if (null !== $this->recordsCount) {
            $res['RecordsCount'] = $this->recordsCount;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->tipsCode) {
            $res['TipsCode'] = $this->tipsCode;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BussinessCode'])) {
            $model->bussinessCode = $map['BussinessCode'];
        }
        if (isset($map['CaseCode'])) {
            $model->caseCode = $map['CaseCode'];
        }
        if (isset($map['RecordsCount'])) {
            $model->recordsCount = $map['RecordsCount'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['TipsCode'])) {
            $model->tipsCode = $map['TipsCode'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
