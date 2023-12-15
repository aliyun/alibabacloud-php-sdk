<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class SetVpcAccessResponseBody extends Model
{
    /**
     * @example CEF72CEB-54B6-4AE8-B225-F876FF7BZ015
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $vpcAccessId;
    protected $_name = [
        'requestId'   => 'RequestId',
        'vpcAccessId' => 'VpcAccessId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->vpcAccessId) {
            $res['VpcAccessId'] = $this->vpcAccessId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetVpcAccessResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VpcAccessId'])) {
            $model->vpcAccessId = $map['VpcAccessId'];
        }

        return $model;
    }
}
