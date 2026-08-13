<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallsV2DetailResponseBody;

use AlibabaCloud\Dara\Model;

class trAttachmentZones extends Model
{
    /**
     * @var string
     */
    public $vSwitchCidr;

    /**
     * @var string
     */
    public $vSwitchZoneId;
    protected $_name = [
        'vSwitchCidr' => 'VSwitchCidr',
        'vSwitchZoneId' => 'VSwitchZoneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->vSwitchCidr) {
            $res['VSwitchCidr'] = $this->vSwitchCidr;
        }

        if (null !== $this->vSwitchZoneId) {
            $res['VSwitchZoneId'] = $this->vSwitchZoneId;
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
        if (isset($map['VSwitchCidr'])) {
            $model->vSwitchCidr = $map['VSwitchCidr'];
        }

        if (isset($map['VSwitchZoneId'])) {
            $model->vSwitchZoneId = $map['VSwitchZoneId'];
        }

        return $model;
    }
}
