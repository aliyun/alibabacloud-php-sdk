<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeKvUsageDataRequest extends Model
{
    /**
     * @example get
     *
     * @var string
     */
    public $accessType;

    /**
     * @example 2022-08-10T23:59:59Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example acc
     *
     * @var string
     */
    public $field;

    /**
     * @example 12423131231****
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @example detail
     *
     * @var string
     */
    public $responseType;

    /**
     * @example type
     *
     * @var string
     */
    public $splitBy;

    /**
     * @example 2022-08-10T00:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'accessType'   => 'AccessType',
        'endTime'      => 'EndTime',
        'field'        => 'Field',
        'namespaceId'  => 'NamespaceId',
        'responseType' => 'ResponseType',
        'splitBy'      => 'SplitBy',
        'startTime'    => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessType) {
            $res['AccessType'] = $this->accessType;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->field) {
            $res['Field'] = $this->field;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->responseType) {
            $res['ResponseType'] = $this->responseType;
        }
        if (null !== $this->splitBy) {
            $res['SplitBy'] = $this->splitBy;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeKvUsageDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessType'])) {
            $model->accessType = $map['AccessType'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Field'])) {
            $model->field = $map['Field'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['ResponseType'])) {
            $model->responseType = $map['ResponseType'];
        }
        if (isset($map['SplitBy'])) {
            $model->splitBy = $map['SplitBy'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
