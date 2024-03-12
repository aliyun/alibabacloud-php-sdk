<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeExpressConnectRouterResponseBody;

use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeExpressConnectRouterResponseBody\ecrList\tags;
use AlibabaCloud\Tea\Model;

class ecrList extends Model
{
    /**
     * @example 45104
     *
     * @var int
     */
    public $alibabaSideAsn;

    /**
     * @example Normal
     *
     * @var string
     */
    public $bizStatus;

    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @example ecr-mezk2idmsd0vx2****
     *
     * @var string
     */
    public $ecrId;

    /**
     * @example 2023-02-16T01:44:50Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2023-02-16T01:44:50Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @example 170646818729****
     *
     * @var int
     */
    public $ownerId;

    /**
     * @example rg-aekzuscospt****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example Active
     *
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'alibabaSideAsn'  => 'AlibabaSideAsn',
        'bizStatus'       => 'BizStatus',
        'description'     => 'Description',
        'ecrId'           => 'EcrId',
        'gmtCreate'       => 'GmtCreate',
        'gmtModified'     => 'GmtModified',
        'name'            => 'Name',
        'ownerId'         => 'OwnerId',
        'resourceGroupId' => 'ResourceGroupId',
        'status'          => 'Status',
        'tags'            => 'Tags',
    ];

    public function validate()
    {
    }

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
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
