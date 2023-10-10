<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListVpcResponseBody\vpcList;
use AlibabaCloud\Tea\Model;

class ListVpcResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The information about VPCs.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The name of the VPC.
     *
     * @example b197-40ab-9155-7ca7
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the VPC is available. Valid values:
     * - false: The VPC is unavailable.
     * @var vpcList
     */
    public $vpcList;
    protected $_name = [
        'code'      => 'Code',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'vpcList'   => 'VpcList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->vpcList) {
            $res['VpcList'] = null !== $this->vpcList ? $this->vpcList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVpcResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VpcList'])) {
            $model->vpcList = vpcList::fromMap($map['VpcList']);
        }

        return $model;
    }
}
