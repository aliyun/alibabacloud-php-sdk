<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgxdcapserver\V20200726\Models;

use AlibabaCloud\Tea\Model;

class GetTcbInfoRequest extends Model
{
    /**
     * @var string
     */
    public $acsHost;

    /**
     * @var string
     */
    public $clientVpcId;

    /**
     * @example 00706a100000
     *
     * @var string
     */
    public $fmspc;
    protected $_name = [
        'acsHost'     => 'AcsHost',
        'clientVpcId' => 'ClientVpcId',
        'fmspc'       => 'fmspc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acsHost) {
            $res['AcsHost'] = $this->acsHost;
        }
        if (null !== $this->clientVpcId) {
            $res['ClientVpcId'] = $this->clientVpcId;
        }
        if (null !== $this->fmspc) {
            $res['fmspc'] = $this->fmspc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTcbInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcsHost'])) {
            $model->acsHost = $map['AcsHost'];
        }
        if (isset($map['ClientVpcId'])) {
            $model->clientVpcId = $map['ClientVpcId'];
        }
        if (isset($map['fmspc'])) {
            $model->fmspc = $map['fmspc'];
        }

        return $model;
    }
}
