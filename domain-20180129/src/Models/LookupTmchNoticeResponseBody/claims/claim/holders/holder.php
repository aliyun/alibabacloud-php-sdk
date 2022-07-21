<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\LookupTmchNoticeResponseBody\claims\claim\holders;

use AlibabaCloud\SDK\Domain\V20180129\Models\LookupTmchNoticeResponseBody\claims\claim\holders\holder\addr;
use AlibabaCloud\Tea\Model;

class holder extends Model
{
    /**
     * @var addr
     */
    public $addr;

    /**
     * @var string
     */
    public $entitlement;

    /**
     * @var string
     */
    public $org;
    protected $_name = [
        'addr'        => 'Addr',
        'entitlement' => 'Entitlement',
        'org'         => 'Org',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addr) {
            $res['Addr'] = null !== $this->addr ? $this->addr->toMap() : null;
        }
        if (null !== $this->entitlement) {
            $res['Entitlement'] = $this->entitlement;
        }
        if (null !== $this->org) {
            $res['Org'] = $this->org;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return holder
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Addr'])) {
            $model->addr = addr::fromMap($map['Addr']);
        }
        if (isset($map['Entitlement'])) {
            $model->entitlement = $map['Entitlement'];
        }
        if (isset($map['Org'])) {
            $model->org = $map['Org'];
        }

        return $model;
    }
}
