<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionBatchRequest\appInfos;

use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionBatchRequest\appInfos\resultStore\storeInfo;
use AlibabaCloud\Tea\Model;

class resultStore extends Model
{
    /**
     * @var bool
     */
    public $need;

    /**
     * @var storeInfo[]
     */
    public $storeInfo;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'need'      => 'Need',
        'storeInfo' => 'StoreInfo',
        'type'      => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->need) {
            $res['Need'] = $this->need;
        }
        if (null !== $this->storeInfo) {
            $res['StoreInfo'] = [];
            if (null !== $this->storeInfo && \is_array($this->storeInfo)) {
                $n = 0;
                foreach ($this->storeInfo as $item) {
                    $res['StoreInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultStore
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Need'])) {
            $model->need = $map['Need'];
        }
        if (isset($map['StoreInfo'])) {
            if (!empty($map['StoreInfo'])) {
                $model->storeInfo = [];
                $n                = 0;
                foreach ($map['StoreInfo'] as $item) {
                    $model->storeInfo[$n++] = null !== $item ? storeInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
