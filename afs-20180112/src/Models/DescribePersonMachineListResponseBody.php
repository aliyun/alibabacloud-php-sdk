<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Afs\V20180112\Models;

use AlibabaCloud\SDK\Afs\V20180112\Models\DescribePersonMachineListResponseBody\personMachineRes;
use AlibabaCloud\Tea\Model;

class DescribePersonMachineListResponseBody extends Model
{
    /**
     * @var personMachineRes
     */
    public $personMachineRes;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $bizCode;
    protected $_name = [
        'personMachineRes' => 'PersonMachineRes',
        'requestId'        => 'RequestId',
        'bizCode'          => 'BizCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->personMachineRes) {
            $res['PersonMachineRes'] = null !== $this->personMachineRes ? $this->personMachineRes->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->bizCode) {
            $res['BizCode'] = $this->bizCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePersonMachineListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PersonMachineRes'])) {
            $model->personMachineRes = personMachineRes::fromMap($map['PersonMachineRes']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['BizCode'])) {
            $model->bizCode = $map['BizCode'];
        }

        return $model;
    }
}
