<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeJobStatusResponseBody\data\errTaskList\productList;

use AlibabaCloud\Tea\Model;

class logList extends Model
{
    /**
     * @example ProjectLogStoreNotFound
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example cloud_siem_aegis_proc
     *
     * @var string
     */
    public $logCode;

    /**
     * @example vpc_project_test
     *
     * @var string
     */
    public $logStoreNamePattern;

    /**
     * @example sas
     *
     * @var string
     */
    public $productCode;

    /**
     * @example vpc-project-test
     *
     * @var string
     */
    public $projectNamePattern;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionCode;
    protected $_name = [
        'errorCode'           => 'ErrorCode',
        'logCode'             => 'LogCode',
        'logStoreNamePattern' => 'LogStoreNamePattern',
        'productCode'         => 'ProductCode',
        'projectNamePattern'  => 'ProjectNamePattern',
        'regionCode'          => 'RegionCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->logCode) {
            $res['LogCode'] = $this->logCode;
        }
        if (null !== $this->logStoreNamePattern) {
            $res['LogStoreNamePattern'] = $this->logStoreNamePattern;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->projectNamePattern) {
            $res['ProjectNamePattern'] = $this->projectNamePattern;
        }
        if (null !== $this->regionCode) {
            $res['RegionCode'] = $this->regionCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['LogCode'])) {
            $model->logCode = $map['LogCode'];
        }
        if (isset($map['LogStoreNamePattern'])) {
            $model->logStoreNamePattern = $map['LogStoreNamePattern'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['ProjectNamePattern'])) {
            $model->projectNamePattern = $map['ProjectNamePattern'];
        }
        if (isset($map['RegionCode'])) {
            $model->regionCode = $map['RegionCode'];
        }

        return $model;
    }
}
