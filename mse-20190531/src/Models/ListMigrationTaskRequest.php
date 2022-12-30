<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class ListMigrationTaskRequest extends Model
{
    /**
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @example whdc
     *
     * @var string
     */
    public $originInstanceName;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example {}
     *
     * @var string
     */
    public $requestPars;
    protected $_name = [
        'acceptLanguage'     => 'AcceptLanguage',
        'originInstanceName' => 'OriginInstanceName',
        'pageNum'            => 'PageNum',
        'pageSize'           => 'PageSize',
        'requestPars'        => 'RequestPars',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->originInstanceName) {
            $res['OriginInstanceName'] = $this->originInstanceName;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestPars) {
            $res['RequestPars'] = $this->requestPars;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMigrationTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['OriginInstanceName'])) {
            $model->originInstanceName = $map['OriginInstanceName'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestPars'])) {
            $model->requestPars = $map['RequestPars'];
        }

        return $model;
    }
}
