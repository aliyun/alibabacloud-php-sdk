<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pcdn\V20170411\Models\GetDomainsResponseBody\dataList;

use AlibabaCloud\Tea\Model;

class usageData extends Model
{
    /**
     * @var bool
     */
    public $status;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $sliceFormat;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $businessType;
    protected $_name = [
        'status'       => 'Status',
        'domain'       => 'Domain',
        'sliceFormat'  => 'SliceFormat',
        'createdAt'    => 'CreatedAt',
        'updatedAt'    => 'UpdatedAt',
        'resourceId'   => 'ResourceId',
        'businessType' => 'BusinessType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->sliceFormat) {
            $res['SliceFormat'] = $this->sliceFormat;
        }
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return usageData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['SliceFormat'])) {
            $model->sliceFormat = $map['SliceFormat'];
        }
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }

        return $model;
    }
}
