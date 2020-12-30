<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DDoSPro\V20170725\Models;

use AlibabaCloud\Tea\Model;

class ModifyHealthCheckConfigRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var int
     */
    public $frontPort;

    /**
     * @var string
     */
    public $configJson;

    /**
     * @var string
     */
    public $lbId;
    protected $_name = [
        'sourceIp'   => 'SourceIp',
        'lang'       => 'Lang',
        'ip'         => 'Ip',
        'frontPort'  => 'FrontPort',
        'configJson' => 'ConfigJson',
        'lbId'       => 'LbId',
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
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->frontPort) {
            $res['FrontPort'] = $this->frontPort;
        }
        if (null !== $this->configJson) {
            $res['ConfigJson'] = $this->configJson;
        }
        if (null !== $this->lbId) {
            $res['LbId'] = $this->lbId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyHealthCheckConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['FrontPort'])) {
            $model->frontPort = $map['FrontPort'];
        }
        if (isset($map['ConfigJson'])) {
            $model->configJson = $map['ConfigJson'];
        }
        if (isset($map['LbId'])) {
            $model->lbId = $map['LbId'];
        }

        return $model;
    }
}
