<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class QueryWorksByOrganizationRequest extends Model
{
    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description The number of rows per page set when the interface is requested.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Returns a list of all works in the organization that meet the requested criteria.
     *
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @description The total number of pages returned.
     *
     * @example 1
     *
     * @var int
     */
    public $thirdPartAuthFlag;

    /**
     * @description The ID of the request.
     *
     * @example PAGE
     *
     * @var string
     */
    public $worksType;
    protected $_name = [
        'pageNum'           => 'PageNum',
        'pageSize'          => 'PageSize',
        'status'            => 'Status',
        'thirdPartAuthFlag' => 'ThirdPartAuthFlag',
        'worksType'         => 'WorksType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->thirdPartAuthFlag) {
            $res['ThirdPartAuthFlag'] = $this->thirdPartAuthFlag;
        }
        if (null !== $this->worksType) {
            $res['WorksType'] = $this->worksType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryWorksByOrganizationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ThirdPartAuthFlag'])) {
            $model->thirdPartAuthFlag = $map['ThirdPartAuthFlag'];
        }
        if (isset($map['WorksType'])) {
            $model->worksType = $map['WorksType'];
        }

        return $model;
    }
}
