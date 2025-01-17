<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUniBackupPolicyDetailResponseBody\uniBackupPolicyDTO;

class DescribeUniBackupPolicyDetailResponseBody extends Model
{
    /**
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
        if (null !== $this->uniBackupPolicyDTO) {
            $this->uniBackupPolicyDTO->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->uniBackupPolicyDTO) {
            $res['UniBackupPolicyDTO'] = null !== $this->uniBackupPolicyDTO ? $this->uniBackupPolicyDTO->toArray($noStream) : $this->uniBackupPolicyDTO;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['UniBackupPolicyDTO'])) {
            $model->uniBackupPolicyDTO = uniBackupPolicyDTO::fromMap($map['UniBackupPolicyDTO']);
        }

        return $model;
    }
}
