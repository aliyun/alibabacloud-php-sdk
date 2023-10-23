<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Tea\Model;

class MoveResourceGroupRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @example rg-aekzzk7hx3glaoq
     *
     * @var string
     */
    public $newResourceGroupId;

    /**
     * @description Zone Id。
     *
     * @example AgIDE1MA_149
     *
     * @var string
     */
    public $resourceId;
    protected $_name = [
        'clientToken'        => 'ClientToken',
        'lang'               => 'Lang',
        'newResourceGroupId' => 'NewResourceGroupId',
        'resourceId'         => 'ResourceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->newResourceGroupId) {
            $res['NewResourceGroupId'] = $this->newResourceGroupId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MoveResourceGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['NewResourceGroupId'])) {
            $model->newResourceGroupId = $map['NewResourceGroupId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        return $model;
    }
}
