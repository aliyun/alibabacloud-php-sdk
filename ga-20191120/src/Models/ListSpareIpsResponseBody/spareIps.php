<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListSpareIpsResponseBody;

use AlibabaCloud\Tea\Model;

class spareIps extends Model
{
    /**
     * @description The secondary IP address that is associated with the CNAME. If the acceleration area becomes unavailable, GA redirects traffic to the secondary IP address.
     *
     * @example 47.100.XX.XX
     *
     * @var string
     */
    public $spareIp;

    /**
     * @description The status of the secondary IP address. Valid values:
     *
     *   **active:** The secondary IP address is available.
     *   **inuse:** The secondary IP address is in use.
     *
     * @example active
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'spareIp' => 'SpareIp',
        'state'   => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->spareIp) {
            $res['SpareIp'] = $this->spareIp;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return spareIps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SpareIp'])) {
            $model->spareIp = $map['SpareIp'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
