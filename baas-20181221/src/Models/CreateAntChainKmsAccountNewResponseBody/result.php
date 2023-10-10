<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\CreateAntChainKmsAccountNewResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 1234565181228596659400e4-3bd7-4a83-b9af-d12654bb5779
     *
     * @var string
     */
    public $myKmsKeyId;

    /**
     * @example d408f5c5c3c118b23646f4059c81fbe5a1b067a12f96f4a7a5e09eae10c81288cdf64aa887af89738b9ec5d16bc124594bf820a4afa24fe0de9d8dcfd1d99500
     *
     * @var string
     */
    public $pubKey;
    protected $_name = [
        'myKmsKeyId' => 'MyKmsKeyId',
        'pubKey'     => 'PubKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->myKmsKeyId) {
            $res['MyKmsKeyId'] = $this->myKmsKeyId;
        }
        if (null !== $this->pubKey) {
            $res['PubKey'] = $this->pubKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MyKmsKeyId'])) {
            $model->myKmsKeyId = $map['MyKmsKeyId'];
        }
        if (isset($map['PubKey'])) {
            $model->pubKey = $map['PubKey'];
        }

        return $model;
    }
}
