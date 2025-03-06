<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class SetVpcAccessResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example CEF72CEB-54B6-4AE8-B225-F876FF7BZ015
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the VPC access authorization.
     *
     * @example 4c68e061860f441ab72af7404137440e
     *
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
