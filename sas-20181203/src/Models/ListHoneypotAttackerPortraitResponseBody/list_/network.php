<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotAttackerPortraitResponseBody\list_;

use AlibabaCloud\Tea\Model;

class network extends Model
{
    /**
     * @description The public IP addresses.
     *
     * @var string[]
     */
    public $externalIp;

    /**
     * @description The private IP addresses.
     *
     * @var string[]
     */
    public $internalIp;

    /**
     * @description The originating IP addresses.
     *
     * @var string[]
     */
    public $realIp;
    protected $_name = [
        'externalIp' => 'ExternalIp',
        'internalIp' => 'InternalIp',
        'realIp'     => 'RealIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->externalIp) {
            $res['ExternalIp'] = $this->externalIp;
        }
        if (null !== $this->internalIp) {
            $res['InternalIp'] = $this->internalIp;
        }
        if (null !== $this->realIp) {
            $res['RealIp'] = $this->realIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return network
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExternalIp'])) {
            if (!empty($map['ExternalIp'])) {
                $model->externalIp = $map['ExternalIp'];
            }
        }
        if (isset($map['InternalIp'])) {
            if (!empty($map['InternalIp'])) {
                $model->internalIp = $map['InternalIp'];
            }
        }
        if (isset($map['RealIp'])) {
            if (!empty($map['RealIp'])) {
                $model->realIp = $map['RealIp'];
            }
        }

        return $model;
    }
}
