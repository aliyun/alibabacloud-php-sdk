<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\RenderOrderWithDesignatedTbUidResponseBody\model\unsellableRenderOrderInfos;

use AlibabaCloud\Tea\Model;

class deliveryInfos extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @description id
     *
     * @example 4
     *
     * @var string
     */
    public $id;

    /**
     * @example 0
     *
     * @var int
     */
    public $postFee;

    /**
     * @example -4
     *
     * @var int
     */
    public $serviceType;
    protected $_name = [
        'displayName' => 'DisplayName',
        'id'          => 'Id',
        'postFee'     => 'PostFee',
        'serviceType' => 'ServiceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->postFee) {
            $res['PostFee'] = $this->postFee;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deliveryInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['PostFee'])) {
            $model->postFee = $map['PostFee'];
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }

        return $model;
    }
}
