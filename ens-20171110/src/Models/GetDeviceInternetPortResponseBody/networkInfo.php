<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\GetDeviceInternetPortResponseBody;

use AlibabaCloud\Tea\Model;

class networkInfo extends Model
{
    /**
     * @example 39.105.62.120
     *
     * @var string
     */
    public $externalIp;

    /**
     * @example 20
     *
     * @var string
     */
    public $externalPort;

    /**
     * @example cmcc
     *
     * @var string
     */
    public $ISP;

    /**
     * @example 10.0.0.49
     *
     * @var string
     */
    public $internalIp;

    /**
     * @example 2020/2025
     *
     * @var string
     */
    public $internalPort;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'externalIp'   => 'ExternalIp',
        'externalPort' => 'ExternalPort',
        'ISP'          => 'ISP',
        'internalIp'   => 'InternalIp',
        'internalPort' => 'InternalPort',
        'status'       => 'Status',
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
        if (null !== $this->externalPort) {
            $res['ExternalPort'] = $this->externalPort;
        }
        if (null !== $this->ISP) {
            $res['ISP'] = $this->ISP;
        }
        if (null !== $this->internalIp) {
            $res['InternalIp'] = $this->internalIp;
        }
        if (null !== $this->internalPort) {
            $res['InternalPort'] = $this->internalPort;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExternalIp'])) {
            $model->externalIp = $map['ExternalIp'];
        }
        if (isset($map['ExternalPort'])) {
            $model->externalPort = $map['ExternalPort'];
        }
        if (isset($map['ISP'])) {
            $model->ISP = $map['ISP'];
        }
        if (isset($map['InternalIp'])) {
            $model->internalIp = $map['InternalIp'];
        }
        if (isset($map['InternalPort'])) {
            $model->internalPort = $map['InternalPort'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
