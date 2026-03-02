<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class CreateAssetWatchCmd extends Model
{
    /**
     * @var int
     */
    public $assetId;

    /**
     * @var string
     */
    public $assetType;

    /**
     * @var int
     */
    public $companyId;

    /**
     * @var int
     */
    public $marketId;
    protected $_name = [
        'assetId' => 'assetId',
        'assetType' => 'assetType',
        'companyId' => 'companyId',
        'marketId' => 'marketId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetId) {
            $res['assetId'] = $this->assetId;
        }

        if (null !== $this->assetType) {
            $res['assetType'] = $this->assetType;
        }

        if (null !== $this->companyId) {
            $res['companyId'] = $this->companyId;
        }

        if (null !== $this->marketId) {
            $res['marketId'] = $this->marketId;
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
        if (isset($map['assetId'])) {
            $model->assetId = $map['assetId'];
        }

        if (isset($map['assetType'])) {
            $model->assetType = $map['assetType'];
        }

        if (isset($map['companyId'])) {
            $model->companyId = $map['companyId'];
        }

        if (isset($map['marketId'])) {
            $model->marketId = $map['marketId'];
        }

        return $model;
    }
}
