<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\GetRepositoryTagV2ResponseBody\result;

use AlibabaCloud\Tea\Model;

class signature extends Model
{
    /**
     * @var string
     */
    public $verificationStatus;

    /**
     * @var string
     */
    public $gpgKeyId;
    protected $_name = [
        'verificationStatus' => 'VerificationStatus',
        'gpgKeyId'           => 'GpgKeyId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->verificationStatus) {
            $res['VerificationStatus'] = $this->verificationStatus;
        }
        if (null !== $this->gpgKeyId) {
            $res['GpgKeyId'] = $this->gpgKeyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return signature
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VerificationStatus'])) {
            $model->verificationStatus = $map['VerificationStatus'];
        }
        if (isset($map['GpgKeyId'])) {
            $model->gpgKeyId = $map['GpgKeyId'];
        }

        return $model;
    }
}
