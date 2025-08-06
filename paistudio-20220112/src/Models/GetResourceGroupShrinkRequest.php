<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

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
        'tagShrink' => 'Tag',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
