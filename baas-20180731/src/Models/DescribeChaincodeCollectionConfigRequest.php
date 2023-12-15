<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class DescribeChaincodeCollectionConfigRequest extends Model
{
    /**
     * @var string
     */
    public $chaincodeId;

    /**
     * @var string
     */
    public $location;
    protected $_name = [
        'chaincodeId' => 'ChaincodeId',
        'location'    => 'Location',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chaincodeId) {
            $res['ChaincodeId'] = $this->chaincodeId;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeChaincodeCollectionConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChaincodeId'])) {
            $model->chaincodeId = $map['ChaincodeId'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }

        return $model;
    }
}
