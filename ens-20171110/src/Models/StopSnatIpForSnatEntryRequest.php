<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class StopSnatIpForSnatEntryRequest extends Model
{
    /**
     * @description The ID of the SNAT entry.
     *
     * @example snat-5tfi6f8gds82mjmlofeym****
     *
     * @var string
     */
    public $snatEntryId;

    /**
     * @description The EIP specified in the SNAT entry.
     *
     * @example 221.178.103.143
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
     * @return StopSnatIpForSnatEntryRequest
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
