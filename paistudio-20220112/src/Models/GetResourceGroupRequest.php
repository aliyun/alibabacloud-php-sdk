<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetResourceGroupRequest\tag;
use AlibabaCloud\Tea\Model;

class GetResourceGroupRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $isAIWorkspaceDataEnabled;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'isAIWorkspaceDataEnabled' => 'IsAIWorkspaceDataEnabled',
        'tag'                      => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isAIWorkspaceDataEnabled) {
            $res['IsAIWorkspaceDataEnabled'] = $this->isAIWorkspaceDataEnabled;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetResourceGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsAIWorkspaceDataEnabled'])) {
            $model->isAIWorkspaceDataEnabled = $map['IsAIWorkspaceDataEnabled'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
