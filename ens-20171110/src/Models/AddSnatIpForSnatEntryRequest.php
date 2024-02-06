<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class AddSnatIpForSnatEntryRequest extends Model
{
    /**
     * @description The ID of the SNAT entry.
     *
     * @example snat-5xkzf89dndkzh8yg9stzqz9m4
     *
     * @var string
     */
    public $snatEntryId;

    /**
     * @description The EIP that you want to add to the SNAT entry.
     *
     * @example 219.152.82.144
     *
     * @var string
     */
    public $snatIp;
    protected $_name = [
        'snatEntryId' => 'SnatEntryId',
        'snatIp'      => 'SnatIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->snatEntryId) {
            $res['SnatEntryId'] = $this->snatEntryId;
        }
        if (null !== $this->snatIp) {
            $res['SnatIp'] = $this->snatIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddSnatIpForSnatEntryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SnatEntryId'])) {
            $model->snatEntryId = $map['SnatEntryId'];
        }
        if (isset($map['SnatIp'])) {
            $model->snatIp = $map['SnatIp'];
        }

        return $model;
    }
}
