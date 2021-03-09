<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\CreateEdgeOssPreSignedAddressResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $ossPreSignedAddress;

    /**
     * @var string
     */
    public $ossAddress;
    protected $_name = [
        'ossPreSignedAddress' => 'OssPreSignedAddress',
        'ossAddress'          => 'OssAddress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ossPreSignedAddress) {
            $res['OssPreSignedAddress'] = $this->ossPreSignedAddress;
        }
        if (null !== $this->ossAddress) {
            $res['OssAddress'] = $this->ossAddress;
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
        if (isset($map['OssPreSignedAddress'])) {
            $model->ossPreSignedAddress = $map['OssPreSignedAddress'];
        }
        if (isset($map['OssAddress'])) {
            $model->ossAddress = $map['OssAddress'];
        }

        return $model;
    }
}
