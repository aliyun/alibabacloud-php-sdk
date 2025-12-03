<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eduaiservice\V20231218\Models;

use AlibabaCloud\Dara\Model;

class QueryOrgLabRecordListRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunUid;

    /**
     * @var string
     */
    public $labId;

    /**
     * @var string
     */
    public $orderBy;

    /**
     * @var string
     */
    public $orderDirection;

    /**
     * @var int
     */
    public $pageIndex;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'aliyunUid' => 'AliyunUid',
        'labId' => 'LabId',
        'orderBy' => 'OrderBy',
        'orderDirection' => 'OrderDirection',
        'pageIndex' => 'PageIndex',
        'pageSize' => 'PageSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunUid) {
            $res['AliyunUid'] = $this->aliyunUid;
        }

        if (null !== $this->labId) {
            $res['LabId'] = $this->labId;
        }

        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }

        if (null !== $this->orderDirection) {
            $res['OrderDirection'] = $this->orderDirection;
        }

        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['AliyunUid'])) {
            $model->aliyunUid = $map['AliyunUid'];
        }

        if (isset($map['LabId'])) {
            $model->labId = $map['LabId'];
        }

        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }

        if (isset($map['OrderDirection'])) {
            $model->orderDirection = $map['OrderDirection'];
        }

        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
