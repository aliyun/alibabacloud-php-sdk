<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUniBackupPolicyDetailResponseBody\uniBackupPolicyDTO;
use AlibabaCloud\Tea\Model;

class DescribeUniBackupPolicyDetailResponseBody extends Model
{
    /**
     * @example F35F45B0-5D6B-4238-BE02-A62D0760****
     *
     * @var string
     */
    public $requestId;

    /**
     * @var uniBackupPolicyDTO
     */
    public $uniBackupPolicyDTO;
    protected $_name = [
        'requestId'          => 'RequestId',
        'uniBackupPolicyDTO' => 'UniBackupPolicyDTO',
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
        if (null !== $this->uniBackupPolicyDTO) {
            $res['UniBackupPolicyDTO'] = null !== $this->uniBackupPolicyDTO ? $this->uniBackupPolicyDTO->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUniBackupPolicyDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UniBackupPolicyDTO'])) {
            $model->uniBackupPolicyDTO = uniBackupPolicyDTO::fromMap($map['UniBackupPolicyDTO']);
        }

        return $model;
    }
}
