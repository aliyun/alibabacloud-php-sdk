<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\Tea\Model;

class UpdateFlexAccTcpPortsRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var int
     */
    public $esnBizId;

    /**
     * @var string
     */
    public $ports;
    protected $_name = [
        'sourceIp' => 'SourceIp',
        'esnBizId' => 'EsnBizId',
        'ports'    => 'Ports',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->esnBizId) {
            $res['EsnBizId'] = $this->esnBizId;
        }
        if (null !== $this->ports) {
            $res['Ports'] = $this->ports;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateFlexAccTcpPortsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['EsnBizId'])) {
            $model->esnBizId = $map['EsnBizId'];
        }
        if (isset($map['Ports'])) {
            $model->ports = $map['Ports'];
        }

        return $model;
    }
}
