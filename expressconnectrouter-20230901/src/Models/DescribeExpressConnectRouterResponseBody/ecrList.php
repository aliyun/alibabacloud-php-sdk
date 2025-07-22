<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeExpressConnectRouterResponseBody;

use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeExpressConnectRouterResponseBody\ecrList\tags;
use AlibabaCloud\Tea\Model;

class ecrList extends Model
{
    /**
     * @description The autonomous system number (ASN) of the ECR.
     *
     * @example 45104
     *
     * @var int
     */
    public $alibabaSideAsn;

    /**
     * @description The business state of the ECR. Valid values:
     *
     *   **Normal:** The ECR is running as expected.
     *   **FinancialLocked**: The ECR is locked due to overdue payments.
     *
     * @example Normal
     *
     * @var string
     */
    public $bizStatus;

    /**
     * @description The description of the ECR.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The ECR ID.
     *
     * @example ecr-mezk2idmsd0vx2****
     *
     * @var string
     */
    public $ecrId;

    /**
     * @description The time when the ECR was created. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2023-02-16T01:44:50Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the ECR was modified. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2023-02-16T01:44:50Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The name of the ECR.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the Alibaba Cloud account that owns the ECR.
     *
     * @example 170646818729****
     *
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the resource group to which the ECR belongs.
     *
     * @example rg-aekzuscospt****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The deployment state of the ECR. Valid values:
     *
     *   **ACTIVE**: The ECR is created.
     *   **UPDATING**: The ECR is being modified.
     *   **ASSOCIATING**: The ECR is being associated with resources.
     *   **DISSOCIATING**: The resource is being disassociated from resources.
     *   **LOCKED_ATTACHING**: The ECR is locked because it is being associated with an external system.
     *   **LOCKED_DETACHING**: The ECR is locked because it is being disassociated from an external system.
     *   **RECLAIMING**: The ECR is waiting to release resources.
     *   **DELETING**: The ECR is being deleted.
     *
     * @example Active
     *
     * @var string
     */
    public $status;

    /**
     * @description The tags.
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'alibabaSideAsn' => 'AlibabaSideAsn',
        'bizStatus' => 'BizStatus',
        'description' => 'Description',
        'ecrId' => 'EcrId',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'name' => 'Name',
        'ownerId' => 'OwnerId',
        'resourceGroupId' => 'ResourceGroupId',
        'status' => 'Status',
        'tags' => 'Tags',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->alibabaSideAsn) {
            $res['AlibabaSideAsn'] = $this->alibabaSideAsn;
        }
        if (null !== $this->bizStatus) {
            $res['BizStatus'] = $this->bizStatus;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ecrId) {
            $res['EcrId'] = $this->ecrId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ecrList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlibabaSideAsn'])) {
            $model->alibabaSideAsn = $map['AlibabaSideAsn'];
        }
        if (isset($map['BizStatus'])) {
            $model->bizStatus = $map['BizStatus'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EcrId'])) {
            $model->ecrId = $map['EcrId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
