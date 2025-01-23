<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class QuotaTopo extends Model
{
    /**
     * @var string
     */
    public $depth;
    /**
     * @var string
     */
    public $parentQuotaId;
    /**
     * @var QuotaDetails
     */
    public $quotaDetails;
    /**
     * @var string
     */
    public $quotaId;
    /**
     * @var string
     */
    public $quotaName;
    /**
     * @var string
     */
    public $resourceType;
    /**
     * @var WorkloadDetails
     */
    public $workloadDetails;
    protected $_name = [
        'depth'           => 'Depth',
        'parentQuotaId'   => 'ParentQuotaId',
        'quotaDetails'    => 'QuotaDetails',
        'quotaId'         => 'QuotaId',
        'quotaName'       => 'QuotaName',
        'resourceType'    => 'ResourceType',
        'workloadDetails' => 'WorkloadDetails',
    ];

    public function validate()
    {
        if (null !== $this->quotaDetails) {
            $this->quotaDetails->validate();
        }
        if (null !== $this->workloadDetails) {
            $this->workloadDetails->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->depth) {
            $res['Depth'] = $this->depth;
        }

        if (null !== $this->parentQuotaId) {
            $res['ParentQuotaId'] = $this->parentQuotaId;
        }

        if (null !== $this->quotaDetails) {
            $res['QuotaDetails'] = null !== $this->quotaDetails ? $this->quotaDetails->toArray($noStream) : $this->quotaDetails;
        }

        if (null !== $this->quotaId) {
            $res['QuotaId'] = $this->quotaId;
        }

        if (null !== $this->quotaName) {
            $res['QuotaName'] = $this->quotaName;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->workloadDetails) {
            $res['WorkloadDetails'] = null !== $this->workloadDetails ? $this->workloadDetails->toArray($noStream) : $this->workloadDetails;
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
        if (isset($map['Depth'])) {
            $model->depth = $map['Depth'];
        }

        if (isset($map['ParentQuotaId'])) {
            $model->parentQuotaId = $map['ParentQuotaId'];
        }

        if (isset($map['QuotaDetails'])) {
            $model->quotaDetails = QuotaDetails::fromMap($map['QuotaDetails']);
        }

        if (isset($map['QuotaId'])) {
            $model->quotaId = $map['QuotaId'];
        }

        if (isset($map['QuotaName'])) {
            $model->quotaName = $map['QuotaName'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['WorkloadDetails'])) {
            $model->workloadDetails = WorkloadDetails::fromMap($map['WorkloadDetails']);
        }

        return $model;
    }
}
