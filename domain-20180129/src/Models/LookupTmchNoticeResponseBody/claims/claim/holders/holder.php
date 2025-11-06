<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\LookupTmchNoticeResponseBody\claims\claim\holders;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Domain\V20180129\Models\LookupTmchNoticeResponseBody\claims\claim\holders\holder\addr;

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
        'addr' => 'Addr',
        'entitlement' => 'Entitlement',
        'org' => 'Org',
    ];

    public function validate()
    {
        if (null !== $this->addr) {
            $this->addr->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addr) {
            $res['Addr'] = null !== $this->addr ? $this->addr->toArray($noStream) : $this->addr;
        }

        if (null !== $this->entitlement) {
            $res['Entitlement'] = $this->entitlement;
        }

        if (null !== $this->org) {
            $res['Org'] = $this->org;
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
