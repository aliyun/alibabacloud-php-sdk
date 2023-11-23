<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class GetResourceGroupRequest extends Model
{
    /**
     * @var bool
     */
    public $isAIWorkspaceDataEnabled;
    protected $_name = [
        'isAIWorkspaceDataEnabled' => 'IsAIWorkspaceDataEnabled',
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

        return $model;
    }
}
