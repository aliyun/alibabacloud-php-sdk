<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Dara\Model;

class DescribeKvUsageDataRequest extends Model
{
    /**
     * @var string
     */
    public $accessType;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $field;

    /**
     * @var string
     */
    public $namespaceId;

    /**
     * @var string
     */
    public $responseType;

    /**
     * @var string
     */
    public $splitBy;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'accessType' => 'AccessType',
        'endTime' => 'EndTime',
        'field' => 'Field',
        'namespaceId' => 'NamespaceId',
        'responseType' => 'ResponseType',
        'splitBy' => 'SplitBy',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
