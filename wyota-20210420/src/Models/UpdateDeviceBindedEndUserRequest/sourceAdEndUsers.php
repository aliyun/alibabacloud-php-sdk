<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\UpdateDeviceBindedEndUserRequest;

use AlibabaCloud\Tea\Model;

class sourceAdEndUsers extends Model
{
    /**
     * @var string
     */
    public $adDomain;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $endUserId;
    protected $_name = [
        'adDomain'    => 'AdDomain',
        'directoryId' => 'DirectoryId',
        'endUserId'   => 'EndUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adDomain) {
            $res['AdDomain'] = $this->adDomain;
        }
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sourceAdEndUsers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdDomain'])) {
            $model->adDomain = $map['AdDomain'];
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }

        return $model;
    }
}
