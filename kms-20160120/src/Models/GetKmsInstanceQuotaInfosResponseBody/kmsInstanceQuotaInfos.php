<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\GetKmsInstanceQuotaInfosResponseBody;

use AlibabaCloud\Dara\Model;

class kmsInstanceQuotaInfos extends Model
{
    /**
     * @var int
     */
    public $resourceQuota;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var int
     */
    public $usedQuantity;
    protected $_name = [
        'resourceQuota' => 'ResourceQuota',
        'resourceType' => 'ResourceType',
        'usedQuantity' => 'UsedQuantity',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resourceQuota) {
            $res['ResourceQuota'] = $this->resourceQuota;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->usedQuantity) {
            $res['UsedQuantity'] = $this->usedQuantity;
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
        if (isset($map['ResourceQuota'])) {
            $model->resourceQuota = $map['ResourceQuota'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['UsedQuantity'])) {
            $model->usedQuantity = $map['UsedQuantity'];
        }

        return $model;
    }
}
