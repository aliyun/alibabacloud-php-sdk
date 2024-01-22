<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class GetQuotaOutput extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $instanceLimit;

    /**
     * @var int
     */
    public $instanceUsed;
    protected $_name = [
        'requestId'     => 'RequestId',
        'instanceLimit' => 'instanceLimit',
        'instanceUsed'  => 'instanceUsed',
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
        if (null !== $this->instanceLimit) {
            $res['instanceLimit'] = $this->instanceLimit;
        }
        if (null !== $this->instanceUsed) {
            $res['instanceUsed'] = $this->instanceUsed;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetQuotaOutput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['instanceLimit'])) {
            $model->instanceLimit = $map['instanceLimit'];
        }
        if (isset($map['instanceUsed'])) {
            $model->instanceUsed = $map['instanceUsed'];
        }

        return $model;
    }
}
