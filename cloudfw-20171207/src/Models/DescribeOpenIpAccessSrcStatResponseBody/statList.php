<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeOpenIpAccessSrcStatResponseBody;

use AlibabaCloud\Dara\Model;

class statList extends Model
{
    /**
     * @var int
     */
    public $abnormalSrcIp;

    /**
     * @var string
     */
    public $app;

    /**
     * @var int
     */
    public $normalSrcIp;

    /**
     * @var string
     */
    public $port;
    protected $_name = [
        'abnormalSrcIp' => 'AbnormalSrcIp',
        'app' => 'App',
        'normalSrcIp' => 'NormalSrcIp',
        'port' => 'Port',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->abnormalSrcIp) {
            $res['AbnormalSrcIp'] = $this->abnormalSrcIp;
        }

        if (null !== $this->app) {
            $res['App'] = $this->app;
        }

        if (null !== $this->normalSrcIp) {
            $res['NormalSrcIp'] = $this->normalSrcIp;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
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
        if (isset($map['AbnormalSrcIp'])) {
            $model->abnormalSrcIp = $map['AbnormalSrcIp'];
        }

        if (isset($map['App'])) {
            $model->app = $map['App'];
        }

        if (isset($map['NormalSrcIp'])) {
            $model->normalSrcIp = $map['NormalSrcIp'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        return $model;
    }
}
