<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMultiDimTableRecordResponseBody\createdBy;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMultiDimTableRecordResponseBody\lastModifiedBy;
use AlibabaCloud\Tea\Model;

class GetMultiDimTableRecordResponseBody extends Model
{
    /**
     * @var createdBy
     */
    public $createdBy;

    /**
     * @example xxx
     *
     * @var int
     */
    public $createdTime;

    /**
     * @example xxx
     *
     * @var mixed[]
     */
    public $fields;

    /**
     * @example xxx
     *
     * @var string
     */
    public $id;

    /**
     * @var lastModifiedBy
     */
    public $lastModifiedBy;

    /**
     * @example xxx
     *
     * @var int
     */
    public $lastModifiedTime;

    /**
     * @example 0FAAEC9C-C6C8-5C87-AF8E-1195889BBXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 0FAAEC9C-C6C8-5C87-AF8E-1195889BBXXX
     *
     * @var string
     */
    public $vendorRequestId;

    /**
     * @example dingtalk
     *
     * @var string
     */
    public $vendorType;
    protected $_name = [
        'createdBy' => 'CreatedBy',
        'createdTime' => 'CreatedTime',
        'fields' => 'Fields',
        'id' => 'Id',
        'lastModifiedBy' => 'LastModifiedBy',
        'lastModifiedTime' => 'LastModifiedTime',
        'requestId' => 'requestId',
        'vendorRequestId' => 'vendorRequestId',
        'vendorType' => 'vendorType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdBy) {
            $res['CreatedBy'] = null !== $this->createdBy ? $this->createdBy->toMap() : null;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->fields) {
            $res['Fields'] = $this->fields;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->lastModifiedBy) {
            $res['LastModifiedBy'] = null !== $this->lastModifiedBy ? $this->lastModifiedBy->toMap() : null;
        }
        if (null !== $this->lastModifiedTime) {
            $res['LastModifiedTime'] = $this->lastModifiedTime;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->vendorRequestId) {
            $res['vendorRequestId'] = $this->vendorRequestId;
        }
        if (null !== $this->vendorType) {
            $res['vendorType'] = $this->vendorType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMultiDimTableRecordResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedBy'])) {
            $model->createdBy = createdBy::fromMap($map['CreatedBy']);
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['Fields'])) {
            $model->fields = $map['Fields'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LastModifiedBy'])) {
            $model->lastModifiedBy = lastModifiedBy::fromMap($map['LastModifiedBy']);
        }
        if (isset($map['LastModifiedTime'])) {
            $model->lastModifiedTime = $map['LastModifiedTime'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['vendorRequestId'])) {
            $model->vendorRequestId = $map['vendorRequestId'];
        }
        if (isset($map['vendorType'])) {
            $model->vendorType = $map['vendorType'];
        }

        return $model;
    }
}
