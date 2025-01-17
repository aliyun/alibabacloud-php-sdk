<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterMulticastDomainsResponseBody\transitRouterMulticastDomains;

use AlibabaCloud\Dara\Model;

class options extends Model
{
    /**
     * @var string
     */
    public $igmpv2Support;
    protected $_name = [
        'igmpv2Support' => 'Igmpv2Support',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->igmpv2Support) {
            $res['Igmpv2Support'] = $this->igmpv2Support;
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
        if (isset($map['Igmpv2Support'])) {
            $model->igmpv2Support = $map['Igmpv2Support'];
        }

        return $model;
    }
}
