<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class GetResourceGroupShrinkRequest extends Model
{
    /**
     * @var bool
     */
    public $isAIWorkspaceDataEnabled;

    /**
     * @var string
     */
    public $tagShrink;
    protected $_name = [
        'isAIWorkspaceDataEnabled' => 'IsAIWorkspaceDataEnabled',
        'tagShrink'                => 'Tag',
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
        if (null !== $this->tagShrink) {
            $res['Tag'] = $this->tagShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetResourceGroupShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsAIWorkspaceDataEnabled'])) {
            $model->isAIWorkspaceDataEnabled = $map['IsAIWorkspaceDataEnabled'];
        }
        if (isset($map['Tag'])) {
            $model->tagShrink = $map['Tag'];
        }

        return $model;
    }
}
