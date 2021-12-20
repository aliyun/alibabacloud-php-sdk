<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class ListBucketInventoryResponseBody extends Model
{
    /**
     * @var InventoryConfiguration[]
     */
    public $inventoryConfigurations;

    /**
     * @var bool
     */
    public $isTruncated;

    /**
     * @var string
     */
    public $nextContinuationToken;
    protected $_name = [
        'inventoryConfigurations' => 'InventoryConfiguration',
        'isTruncated'             => 'IsTruncated',
        'nextContinuationToken'   => 'NextContinuationToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inventoryConfigurations) {
            $res['InventoryConfiguration'] = [];
            if (null !== $this->inventoryConfigurations && \is_array($this->inventoryConfigurations)) {
                $n = 0;
                foreach ($this->inventoryConfigurations as $item) {
                    $res['InventoryConfiguration'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->isTruncated) {
            $res['IsTruncated'] = $this->isTruncated;
        }
        if (null !== $this->nextContinuationToken) {
            $res['NextContinuationToken'] = $this->nextContinuationToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListBucketInventoryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InventoryConfiguration'])) {
            if (!empty($map['InventoryConfiguration'])) {
                $model->inventoryConfigurations = [];
                $n                              = 0;
                foreach ($map['InventoryConfiguration'] as $item) {
                    $model->inventoryConfigurations[$n++] = null !== $item ? InventoryConfiguration::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IsTruncated'])) {
            $model->isTruncated = $map['IsTruncated'];
        }
        if (isset($map['NextContinuationToken'])) {
            $model->nextContinuationToken = $map['NextContinuationToken'];
        }

        return $model;
    }
}
