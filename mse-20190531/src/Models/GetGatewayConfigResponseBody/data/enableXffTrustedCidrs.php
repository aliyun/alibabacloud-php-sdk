<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayConfigResponseBody\data;

use AlibabaCloud\Dara\Model;

class enableXffTrustedCidrs extends Model
{
    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $ipListContent;
    protected $_name = [
        'enable' => 'Enable',
        'ipListContent' => 'IpListContent',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->ipListContent) {
            $res['IpListContent'] = $this->ipListContent;
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
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        if (isset($map['IpListContent'])) {
            $model->ipListContent = $map['IpListContent'];
        }

        return $model;
    }
}
