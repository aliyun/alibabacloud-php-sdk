<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class DeleteChannelRequest extends Model
{
    /**
     * @var string
     */
    public $deviceCodes;
    protected $_name = [
        'deviceCodes' => 'DeviceCodes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceCodes) {
            $res['DeviceCodes'] = $this->deviceCodes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteChannelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceCodes'])) {
            $model->deviceCodes = $map['DeviceCodes'];
        }

        return $model;
    }
}
