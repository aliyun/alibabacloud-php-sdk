<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDataCheckTableDiffDetailsResponseBody\diffDetails;
use AlibabaCloud\Tea\Model;

class DescribeDataCheckTableDiffDetailsResponseBody extends Model
{
    /**
     * @example db_dtstest
     *
     * @var string
     */
    public $dbName;

    /**
     * @example 1
     *
     * @var int
     */
    public $diffCount;

    /**
     * @var diffDetails[]
     */
    public $diffDetails;

    /**
     * @example Type
     *
     * @var string
     */
    public $dynamicMessage;

    /**
     * @example InvalidParameter
     *
     * @var string
     */
    public $errCode;

    /**
     * @example The value of the parameter tbName is invalid.
     *
     * @var string
     */
    public $errMessage;

    /**
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @example dtsog8q1z3tc9t****"
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 621BB4F8-3016-4FAA-8D5A-5D3163CC****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @example test_person
     *
     * @var string
     */
    public $tbName;
    protected $_name = [
        'dbName'         => 'DbName',
        'diffCount'      => 'DiffCount',
        'diffDetails'    => 'DiffDetails',
        'dynamicMessage' => 'DynamicMessage',
        'errCode'        => 'ErrCode',
        'errMessage'     => 'ErrMessage',
        'httpStatusCode' => 'HttpStatusCode',
        'instanceId'     => 'InstanceId',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
        'tbName'         => 'TbName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->diffCount) {
            $res['DiffCount'] = $this->diffCount;
        }
        if (null !== $this->diffDetails) {
            $res['DiffDetails'] = [];
            if (null !== $this->diffDetails && \is_array($this->diffDetails)) {
                $n = 0;
                foreach ($this->diffDetails as $item) {
                    $res['DiffDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dynamicMessage) {
            $res['DynamicMessage'] = $this->dynamicMessage;
        }
        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }
        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->tbName) {
            $res['TbName'] = $this->tbName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDataCheckTableDiffDetailsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['DiffCount'])) {
            $model->diffCount = $map['DiffCount'];
        }
        if (isset($map['DiffDetails'])) {
            if (!empty($map['DiffDetails'])) {
                $model->diffDetails = [];
                $n                  = 0;
                foreach ($map['DiffDetails'] as $item) {
                    $model->diffDetails[$n++] = null !== $item ? diffDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DynamicMessage'])) {
            $model->dynamicMessage = $map['DynamicMessage'];
        }
        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }
        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TbName'])) {
            $model->tbName = $map['TbName'];
        }

        return $model;
    }
}
