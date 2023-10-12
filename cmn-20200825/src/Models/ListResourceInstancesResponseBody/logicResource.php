<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\ListResourceInstancesResponseBody;

use AlibabaCloud\SDK\Cmn\V20200825\Models\ListResourceInstancesResponseBody\logicResource\keyList;
use AlibabaCloud\Tea\Model;

class logicResource extends Model
{
    /**
     * @var keyList[]
     */
    public $keyList;

    /**
     * @var string
     */
    public $resourceAttribute;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'keyList'           => 'KeyList',
        'resourceAttribute' => 'ResourceAttribute',
        'resourceType'      => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyList) {
            $res['KeyList'] = [];
            if (null !== $this->keyList && \is_array($this->keyList)) {
                $n = 0;
                foreach ($this->keyList as $item) {
                    $res['KeyList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resourceAttribute) {
            $res['ResourceAttribute'] = $this->resourceAttribute;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logicResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyList'])) {
            if (!empty($map['KeyList'])) {
                $model->keyList = [];
                $n              = 0;
                foreach ($map['KeyList'] as $item) {
                    $model->keyList[$n++] = null !== $item ? keyList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ResourceAttribute'])) {
            $model->resourceAttribute = $map['ResourceAttribute'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
