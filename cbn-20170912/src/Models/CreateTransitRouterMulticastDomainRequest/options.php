<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\CreateTransitRouterMulticastDomainRequest;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->igmpv2Support) {
            $res['Igmpv2Support'] = $this->igmpv2Support;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return options
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Igmpv2Support'])) {
            $model->igmpv2Support = $map['Igmpv2Support'];
        }

        return $model;
    }
}
