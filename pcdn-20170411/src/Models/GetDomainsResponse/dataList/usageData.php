<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pcdn\V20170411\Models\GetDomainsResponse\dataList;

use AlibabaCloud\Tea\Model;

class usageData extends Model
{
    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $businessType;

    /**
     * @var bool
     */
    public $status;

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
    public $sliceFormat;
    protected $_name = [
        'resourceId'   => 'ResourceId',
        'domain'       => 'Domain',
        'businessType' => 'BusinessType',
        'status'       => 'Status',
        'createdAt'    => 'CreatedAt',
        'updatedAt'    => 'UpdatedAt',
        'sliceFormat'  => 'SliceFormat',
    ];

    public function validate()
    {
        Model::validateRequired('resourceId', $this->resourceId, true);
        Model::validateRequired('domain', $this->domain, true);
        Model::validateRequired('businessType', $this->businessType, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('createdAt', $this->createdAt, true);
        Model::validateRequired('updatedAt', $this->updatedAt, true);
        Model::validateRequired('sliceFormat', $this->sliceFormat, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
        }
        if (null !== $this->sliceFormat) {
            $res['SliceFormat'] = $this->sliceFormat;
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
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }
        if (isset($map['SliceFormat'])) {
            $model->sliceFormat = $map['SliceFormat'];
        }

        return $model;
    }
}
