<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20180509\Models;

use AlibabaCloud\Tea\Model;

class AddPersonRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $clientInfo;
    protected $_name = [
        'regionId'   => 'RegionId',
        'clientInfo' => 'ClientInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->clientInfo) {
            $res['ClientInfo'] = $this->clientInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddPersonRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ClientInfo'])) {
            $model->clientInfo = $map['ClientInfo'];
        }

        return $model;
    }
}
