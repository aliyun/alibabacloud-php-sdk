<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\RenderOrderResponseBody\model\renderOrderInfos\renderOrderInfos\deliveryInfos;

use AlibabaCloud\Tea\Model;

class deliveryInfos extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var int
     */
    public $postFee;

    /**
     * @var int
     */
    public $serviceType;
    protected $_name = [
        'id'          => 'Id',
        'displayName' => 'DisplayName',
        'postFee'     => 'PostFee',
        'serviceType' => 'ServiceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
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
