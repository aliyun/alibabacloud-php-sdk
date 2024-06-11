<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\ImportKeyPairResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2023-03-05T10:29:22Z
     *
     * @var string
     */
    public $gmtCreated;

    /**
     * @example kp-6v2q33ae4tw3*****
     *
     * @var string
     */
    public $keyPairId;

    /**
     * @example TestKeyPairName
     *
     * @var string
     */
    public $keyPairName;
    protected $_name = [
        'gmtCreated'  => 'GmtCreated',
        'keyPairId'   => 'KeyPairId',
        'keyPairName' => 'KeyPairName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }
        if (null !== $this->keyPairId) {
            $res['KeyPairId'] = $this->keyPairId;
        }
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }
        if (isset($map['KeyPairId'])) {
            $model->keyPairId = $map['KeyPairId'];
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }

        return $model;
    }
}
