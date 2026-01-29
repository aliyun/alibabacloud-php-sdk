<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\WhatsappCallRequest;

use AlibabaCloud\Dara\Model;

class session extends Model
{
    /**
     * @var string
     */
    public $sdp;

    /**
     * @var string
     */
    public $sdpType;
    protected $_name = [
        'sdp' => 'Sdp',
        'sdpType' => 'SdpType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sdp) {
            $res['Sdp'] = $this->sdp;
        }

        if (null !== $this->sdpType) {
            $res['SdpType'] = $this->sdpType;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Sdp'])) {
            $model->sdp = $map['Sdp'];
        }

        if (isset($map['SdpType'])) {
            $model->sdpType = $map['SdpType'];
        }

        return $model;
    }
}
