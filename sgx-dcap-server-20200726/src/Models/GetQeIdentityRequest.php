<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgxdcapserver\V20200726\Models;

use AlibabaCloud\Tea\Model;

class GetQeIdentityRequest extends Model
{
    /**
     * @var string
     */
    public $acsHost;

    /**
     * @var string
     */
    public $clientVpcId;
    protected $_name = [
        'acsHost'     => 'AcsHost',
        'clientVpcId' => 'ClientVpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acsHost) {
            $res['AcsHost'] = $this->acsHost;
        }
        if (null !== $this->clientVpcId) {
            $res['ClientVpcId'] = $this->clientVpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetQeIdentityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcsHost'])) {
            $model->acsHost = $map['AcsHost'];
        }
        if (isset($map['ClientVpcId'])) {
            $model->clientVpcId = $map['ClientVpcId'];
        }

        return $model;
    }
}
