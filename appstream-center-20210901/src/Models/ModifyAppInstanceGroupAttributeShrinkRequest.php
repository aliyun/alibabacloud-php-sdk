<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Tea\Model;

class ModifyAppInstanceGroupAttributeShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appInstanceGroupId;

    /**
     * @var string
     */
    public $appInstanceGroupName;

    /**
     * @var string
     */
    public $nodePoolShrink;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var int
     */
    public $sessionTimeout;
    protected $_name = [
        'appInstanceGroupId'   => 'AppInstanceGroupId',
        'appInstanceGroupName' => 'AppInstanceGroupName',
        'nodePoolShrink'       => 'NodePool',
        'productType'          => 'ProductType',
        'sessionTimeout'       => 'SessionTimeout',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appInstanceGroupId) {
            $res['AppInstanceGroupId'] = $this->appInstanceGroupId;
        }
        if (null !== $this->appInstanceGroupName) {
            $res['AppInstanceGroupName'] = $this->appInstanceGroupName;
        }
        if (null !== $this->nodePoolShrink) {
            $res['NodePool'] = $this->nodePoolShrink;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->sessionTimeout) {
            $res['SessionTimeout'] = $this->sessionTimeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAppInstanceGroupAttributeShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppInstanceGroupId'])) {
            $model->appInstanceGroupId = $map['AppInstanceGroupId'];
        }
        if (isset($map['AppInstanceGroupName'])) {
            $model->appInstanceGroupName = $map['AppInstanceGroupName'];
        }
        if (isset($map['NodePool'])) {
            $model->nodePoolShrink = $map['NodePool'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['SessionTimeout'])) {
            $model->sessionTimeout = $map['SessionTimeout'];
        }

        return $model;
    }
}
