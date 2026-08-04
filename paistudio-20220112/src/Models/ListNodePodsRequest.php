<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class ListNodePodsRequest extends Model
{
    /**
     * @var string
     */
    public $GPUIndexes;

    /**
     * @var string
     */
    public $oversoldTypes;

    /**
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'GPUIndexes' => 'GPUIndexes',
        'oversoldTypes' => 'OversoldTypes',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->GPUIndexes) {
            $res['GPUIndexes'] = $this->GPUIndexes;
        }

        if (null !== $this->oversoldTypes) {
            $res['OversoldTypes'] = $this->oversoldTypes;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
        if (isset($map['GPUIndexes'])) {
            $model->GPUIndexes = $map['GPUIndexes'];
        }

        if (isset($map['OversoldTypes'])) {
            $model->oversoldTypes = $map['OversoldTypes'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
