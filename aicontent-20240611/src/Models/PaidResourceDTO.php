<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class PaidResourceDTO extends Model
{
    /**
     * @var string
     */
    public $effectiveTime;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $quantity;

    /**
     * @var int
     */
    public $remainQuantity;

    /**
     * @var string
     */
    public $resourceCatalogCode;

    /**
     * @var string
     */
    public $resourceCatalogName;

    /**
     * @var string
     */
    public $resourcePackageCode;

    /**
     * @var string
     */
    public $resourcePackageName;

    /**
     * @var string
     */
    public $resourceStatus;
    protected $_name = [
        'effectiveTime' => 'effectiveTime',
        'expireTime' => 'expireTime',
        'instanceId' => 'instanceId',
        'quantity' => 'quantity',
        'remainQuantity' => 'remainQuantity',
        'resourceCatalogCode' => 'resourceCatalogCode',
        'resourceCatalogName' => 'resourceCatalogName',
        'resourcePackageCode' => 'resourcePackageCode',
        'resourcePackageName' => 'resourcePackageName',
        'resourceStatus' => 'resourceStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->effectiveTime) {
            $res['effectiveTime'] = $this->effectiveTime;
        }

        if (null !== $this->expireTime) {
            $res['expireTime'] = $this->expireTime;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->quantity) {
            $res['quantity'] = $this->quantity;
        }

        if (null !== $this->remainQuantity) {
            $res['remainQuantity'] = $this->remainQuantity;
        }

        if (null !== $this->resourceCatalogCode) {
            $res['resourceCatalogCode'] = $this->resourceCatalogCode;
        }

        if (null !== $this->resourceCatalogName) {
            $res['resourceCatalogName'] = $this->resourceCatalogName;
        }

        if (null !== $this->resourcePackageCode) {
            $res['resourcePackageCode'] = $this->resourcePackageCode;
        }

        if (null !== $this->resourcePackageName) {
            $res['resourcePackageName'] = $this->resourcePackageName;
        }

        if (null !== $this->resourceStatus) {
            $res['resourceStatus'] = $this->resourceStatus;
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
        if (isset($map['effectiveTime'])) {
            $model->effectiveTime = $map['effectiveTime'];
        }

        if (isset($map['expireTime'])) {
            $model->expireTime = $map['expireTime'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['quantity'])) {
            $model->quantity = $map['quantity'];
        }

        if (isset($map['remainQuantity'])) {
            $model->remainQuantity = $map['remainQuantity'];
        }

        if (isset($map['resourceCatalogCode'])) {
            $model->resourceCatalogCode = $map['resourceCatalogCode'];
        }

        if (isset($map['resourceCatalogName'])) {
            $model->resourceCatalogName = $map['resourceCatalogName'];
        }

        if (isset($map['resourcePackageCode'])) {
            $model->resourcePackageCode = $map['resourcePackageCode'];
        }

        if (isset($map['resourcePackageName'])) {
            $model->resourcePackageName = $map['resourcePackageName'];
        }

        if (isset($map['resourceStatus'])) {
            $model->resourceStatus = $map['resourceStatus'];
        }

        return $model;
    }
}
