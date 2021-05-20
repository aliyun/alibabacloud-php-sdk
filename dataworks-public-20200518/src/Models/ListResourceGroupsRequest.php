<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListResourceGroupsRequest extends Model
{
    /**
     * @var int
     */
    public $resourceGroupType;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var string
     */
    public $bizExtKey;
    protected $_name = [
        'resourceGroupType' => 'ResourceGroupType',
        'keyword'           => 'Keyword',
        'bizExtKey'         => 'BizExtKey',
    ];

    public function validate()
    {
        Model::validateRequired('resourceGroupType', $this->resourceGroupType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceGroupType) {
            $res['ResourceGroupType'] = $this->resourceGroupType;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->bizExtKey) {
            $res['BizExtKey'] = $this->bizExtKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListResourceGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceGroupType'])) {
            $model->resourceGroupType = $map['ResourceGroupType'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['BizExtKey'])) {
            $model->bizExtKey = $map['BizExtKey'];
        }

        return $model;
    }
}
