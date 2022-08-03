<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class ApplyServerSideEncryptionByDefault extends Model
{
    /**
     * @var string
     */
    public $KMSDataEncryption;

    /**
     * @var string
     */
    public $KMSMasterKeyID;

    /**
     * @var string
     */
    public $SSEAlgorithm;
    protected $_name = [
        'KMSDataEncryption' => 'KMSDataEncryption',
        'KMSMasterKeyID'    => 'KMSMasterKeyID',
        'SSEAlgorithm'      => 'SSEAlgorithm',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->KMSDataEncryption) {
            $res['KMSDataEncryption'] = $this->KMSDataEncryption;
        }
        if (null !== $this->KMSMasterKeyID) {
            $res['KMSMasterKeyID'] = $this->KMSMasterKeyID;
        }
        if (null !== $this->SSEAlgorithm) {
            $res['SSEAlgorithm'] = $this->SSEAlgorithm;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplyServerSideEncryptionByDefault
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KMSDataEncryption'])) {
            $model->KMSDataEncryption = $map['KMSDataEncryption'];
        }
        if (isset($map['KMSMasterKeyID'])) {
            $model->KMSMasterKeyID = $map['KMSMasterKeyID'];
        }
        if (isset($map['SSEAlgorithm'])) {
            $model->SSEAlgorithm = $map['SSEAlgorithm'];
        }

        return $model;
    }
}
