<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Dara\Model;

class DescribeSoarTaskAndActionsRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

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
    public $queryType;

    /**
     * @var string
     */
    public $queryValue;

    /**
     * @var string
     */
    public $requestUuid;
    protected $_name = [
        'lang' => 'Lang',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'queryType' => 'QueryType',
        'queryValue' => 'QueryValue',
        'requestUuid' => 'RequestUuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->queryType) {
            $res['QueryType'] = $this->queryType;
        }

        if (null !== $this->queryValue) {
            $res['QueryValue'] = $this->queryValue;
        }

        if (null !== $this->requestUuid) {
            $res['RequestUuid'] = $this->requestUuid;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['QueryType'])) {
            $model->queryType = $map['QueryType'];
        }

        if (isset($map['QueryValue'])) {
            $model->queryValue = $map['QueryValue'];
        }

        if (isset($map['RequestUuid'])) {
            $model->requestUuid = $map['RequestUuid'];
        }

        return $model;
    }
}
