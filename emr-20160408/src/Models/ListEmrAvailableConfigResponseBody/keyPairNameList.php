<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableConfigResponseBody;

use AlibabaCloud\Tea\Model;

class keyPairNameList extends Model
{
    /**
     * @var string[]
     */
    public $keyPairName;
    protected $_name = [
        'keyPairName' => 'KeyPairName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return keyPairNameList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyPairName'])) {
            if (!empty($map['KeyPairName'])) {
                $model->keyPairName = $map['KeyPairName'];
            }
        }

        return $model;
    }
}
