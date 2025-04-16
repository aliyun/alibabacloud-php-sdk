<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeNatAclPageStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $detail;

    /**
     * @var bool
     */
    public $natAclPageEnable;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'detail' => 'Detail',
        'natAclPageEnable' => 'NatAclPageEnable',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }

        if (null !== $this->natAclPageEnable) {
            $res['NatAclPageEnable'] = $this->natAclPageEnable;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }

        if (isset($map['NatAclPageEnable'])) {
            $model->natAclPageEnable = $map['NatAclPageEnable'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
