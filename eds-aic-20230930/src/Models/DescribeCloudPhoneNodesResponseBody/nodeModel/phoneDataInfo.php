<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeCloudPhoneNodesResponseBody\nodeModel;

use AlibabaCloud\Tea\Model;

class phoneDataInfo extends Model
{
    /**
     * @var string
     */
    public $phoneDataId;

    /**
     * @var int
     */
    public $phoneDataVolume;
    protected $_name = [
        'phoneDataId' => 'PhoneDataId',
        'phoneDataVolume' => 'PhoneDataVolume',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->phoneDataId) {
            $res['PhoneDataId'] = $this->phoneDataId;
        }
        if (null !== $this->phoneDataVolume) {
            $res['PhoneDataVolume'] = $this->phoneDataVolume;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return phoneDataInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PhoneDataId'])) {
            $model->phoneDataId = $map['PhoneDataId'];
        }
        if (isset($map['PhoneDataVolume'])) {
            $model->phoneDataVolume = $map['PhoneDataVolume'];
        }

        return $model;
    }
}
