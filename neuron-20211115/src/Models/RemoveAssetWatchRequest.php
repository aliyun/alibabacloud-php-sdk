<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class RemoveAssetWatchRequest extends Model
{
    /**
     * @var string
     */
    public $assetType;

    /**
     * @var int
     */
    public $companyId;
    protected $_name = [
        'assetType' => 'assetType',
        'companyId' => 'companyId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetType) {
            $res['assetType'] = $this->assetType;
        }

        if (null !== $this->companyId) {
            $res['companyId'] = $this->companyId;
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
        if (isset($map['assetType'])) {
            $model->assetType = $map['assetType'];
        }

        if (isset($map['companyId'])) {
            $model->companyId = $map['companyId'];
        }

        return $model;
    }
}
