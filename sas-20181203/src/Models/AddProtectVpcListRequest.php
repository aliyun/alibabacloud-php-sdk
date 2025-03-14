<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class AddProtectVpcListRequest extends Model
{
    /**
     * @description Collection of new VPC instance IDs.
     * > Call the [DescribeVpcList](~~DescribeVpcList~~) interface to obtain this parameter.
     *
     * @example ["vpc-bp1vnpgotyzay6p5i****","vpc-bp1vnpgotyzay6p5i****"]
     *
     * @var string
     */
    public $addVpcInstanceIdList;

    /**
     * @description Collection of VPC instance IDs to be deleted.
     * > Call the [DescribeVpcList](~~DescribeVpcList~~) interface to obtain this parameter.
     *
     * @example ["vpc-bp1vnpgotyzay6p5i****","vpc-bp1vnpgotyzay6p5i****"]
     *
     * @var string
     */
    public $delVpcInstanceIdList;
    protected $_name = [
        'addVpcInstanceIdList' => 'AddVpcInstanceIdList',
        'delVpcInstanceIdList' => 'DelVpcInstanceIdList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->addVpcInstanceIdList) {
            $res['AddVpcInstanceIdList'] = $this->addVpcInstanceIdList;
        }
        if (null !== $this->delVpcInstanceIdList) {
            $res['DelVpcInstanceIdList'] = $this->delVpcInstanceIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddProtectVpcListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddVpcInstanceIdList'])) {
            $model->addVpcInstanceIdList = $map['AddVpcInstanceIdList'];
        }
        if (isset($map['DelVpcInstanceIdList'])) {
            $model->delVpcInstanceIdList = $map['DelVpcInstanceIdList'];
        }

        return $model;
    }
}
