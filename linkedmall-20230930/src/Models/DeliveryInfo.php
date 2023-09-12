<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class DeliveryInfo extends Model
{
    /**
     * @example 快递 免邮
     *
     * @var string
     */
    public $displayName;

    /**
     * @example 20
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
        'displayName' => 'displayName',
        'id'          => 'id',
        'postFee'     => 'postFee',
        'serviceType' => 'serviceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->postFee) {
            $res['postFee'] = $this->postFee;
        }
        if (null !== $this->serviceType) {
            $res['serviceType'] = $this->serviceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeliveryInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['postFee'])) {
            $model->postFee = $map['postFee'];
        }
        if (isset($map['serviceType'])) {
            $model->serviceType = $map['serviceType'];
        }

        return $model;
    }
}
