<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\CreateEdgeOssPreSignedAddressResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $ossAddress;

    /**
     * @var string
     */
    public $ossPreSignedAddress;
    protected $_name = [
        'ossAddress'          => 'OssAddress',
        'ossPreSignedAddress' => 'OssPreSignedAddress',
    ];

    public function validate()
    {
        Model::validateRequired('ossAddress', $this->ossAddress, true);
        Model::validateRequired('ossPreSignedAddress', $this->ossPreSignedAddress, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ossAddress) {
            $res['OssAddress'] = $this->ossAddress;
        }
        if (null !== $this->ossPreSignedAddress) {
            $res['OssPreSignedAddress'] = $this->ossPreSignedAddress;
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
        if (isset($map['OssAddress'])) {
            $model->ossAddress = $map['OssAddress'];
        }
        if (isset($map['OssPreSignedAddress'])) {
            $model->ossPreSignedAddress = $map['OssPreSignedAddress'];
        }

        return $model;
    }
}
