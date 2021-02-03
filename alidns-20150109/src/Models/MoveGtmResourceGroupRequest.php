<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class MoveGtmResourceGroupRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $newResourceGroupId;
    protected $_name = [
        'lang'               => 'Lang',
        'resourceId'         => 'ResourceId',
        'newResourceGroupId' => 'NewResourceGroupId',
    ];

    public function validate()
    {
        Model::validateRequired('resourceId', $this->resourceId, true);
        Model::validateRequired('newResourceGroupId', $this->newResourceGroupId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->newResourceGroupId) {
            $res['NewResourceGroupId'] = $this->newResourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MoveGtmResourceGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['NewResourceGroupId'])) {
            $model->newResourceGroupId = $map['NewResourceGroupId'];
        }

        return $model;
    }
}
