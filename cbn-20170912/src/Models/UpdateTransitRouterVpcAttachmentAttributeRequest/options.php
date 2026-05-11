<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\UpdateTransitRouterVpcAttachmentAttributeRequest;

use AlibabaCloud\Dara\Model;

class options extends Model
{
    /**
     * @var string
     */
    public $applianceModeSupport;

    /**
     * @var string
     */
    public $ipv6Support;
    protected $_name = [
        'applianceModeSupport' => 'ApplianceModeSupport',
        'ipv6Support' => 'Ipv6Support',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applianceModeSupport) {
            $res['ApplianceModeSupport'] = $this->applianceModeSupport;
        }

        if (null !== $this->ipv6Support) {
            $res['Ipv6Support'] = $this->ipv6Support;
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
        if (isset($map['ApplianceModeSupport'])) {
            $model->applianceModeSupport = $map['ApplianceModeSupport'];
        }

        if (isset($map['Ipv6Support'])) {
            $model->ipv6Support = $map['Ipv6Support'];
        }

        return $model;
    }
}
