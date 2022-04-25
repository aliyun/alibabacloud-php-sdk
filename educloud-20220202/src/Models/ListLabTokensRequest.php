<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduCloud\V20220202\Models;

use AlibabaCloud\Tea\Model;

class ListLabTokensRequest extends Model
{
    /**
     * @var int
     */
    public $finishStatus;

    /**
     * @var string
     */
    public $labId;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $ramUid;
    protected $_name = [
        'finishStatus' => 'FinishStatus',
        'labId'        => 'LabId',
        'page'         => 'Page',
        'pageSize'     => 'PageSize',
        'ramUid'       => 'RamUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->finishStatus) {
            $res['FinishStatus'] = $this->finishStatus;
        }
        if (null !== $this->labId) {
            $res['LabId'] = $this->labId;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->ramUid) {
            $res['RamUid'] = $this->ramUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLabTokensRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FinishStatus'])) {
            $model->finishStatus = $map['FinishStatus'];
        }
        if (isset($map['LabId'])) {
            $model->labId = $map['LabId'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RamUid'])) {
            $model->ramUid = $map['RamUid'];
        }

        return $model;
    }
}
