<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapioxscross\V20200701\Models;

use AlibabaCloud\Tea\Model;

class QuerySDKInstancesRequest extends Model
{
    /**
     * @var string
     */
    public $codeList;

    /**
     * @var string
     */
    public $createdAfterDate;

    /**
     * @var string
     */
    public $createdBeforeDate;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $pk;
    protected $_name = [
        'codeList'          => 'CodeList',
        'createdAfterDate'  => 'CreatedAfterDate',
        'createdBeforeDate' => 'CreatedBeforeDate',
        'pageNumber'        => 'PageNumber',
        'pageSize'          => 'PageSize',
        'pk'                => 'Pk',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->codeList) {
            $res['CodeList'] = $this->codeList;
        }
        if (null !== $this->createdAfterDate) {
            $res['CreatedAfterDate'] = $this->createdAfterDate;
        }
        if (null !== $this->createdBeforeDate) {
            $res['CreatedBeforeDate'] = $this->createdBeforeDate;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pk) {
            $res['Pk'] = $this->pk;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySDKInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CodeList'])) {
            $model->codeList = $map['CodeList'];
        }
        if (isset($map['CreatedAfterDate'])) {
            $model->createdAfterDate = $map['CreatedAfterDate'];
        }
        if (isset($map['CreatedBeforeDate'])) {
            $model->createdBeforeDate = $map['CreatedBeforeDate'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Pk'])) {
            $model->pk = $map['Pk'];
        }

        return $model;
    }
}
