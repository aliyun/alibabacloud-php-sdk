<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeHealthCheckConfigResponseBody;

use AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeHealthCheckConfigResponseBody\listeners\check;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeHealthCheckConfigResponseBody\listeners\config;
use AlibabaCloud\Tea\Model;

class listeners extends Model
{
    /**
     * @var int
     */
    public $frontendPort;

    /**
     * @var check
     */
    public $check;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var int
     */
    public $backPort;

    /**
     * @var config
     */
    public $config;
    protected $_name = [
        'frontendPort' => 'FrontendPort',
        'check'        => 'Check',
        'protocol'     => 'Protocol',
        'backPort'     => 'BackPort',
        'config'       => 'Config',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->frontendPort) {
            $res['FrontendPort'] = $this->frontendPort;
        }
        if (null !== $this->check) {
            $res['Check'] = null !== $this->check ? $this->check->toMap() : null;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->backPort) {
            $res['BackPort'] = $this->backPort;
        }
        if (null !== $this->config) {
            $res['Config'] = null !== $this->config ? $this->config->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listeners
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FrontendPort'])) {
            $model->frontendPort = $map['FrontendPort'];
        }
        if (isset($map['Check'])) {
            $model->check = check::fromMap($map['Check']);
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['BackPort'])) {
            $model->backPort = $map['BackPort'];
        }
        if (isset($map['Config'])) {
            $model->config = config::fromMap($map['Config']);
        }

        return $model;
    }
}
