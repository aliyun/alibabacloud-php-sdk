<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribePortRulePageResponseBody;

use AlibabaCloud\Tea\Model;

class ruleList extends Model
{
    /**
     * @var string
     */
    public $backProtocol;

    /**
     * @var int
     */
    public $backPort;

    /**
     * @var string
     */
    public $lbId;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $lvsType;

    /**
     * @var string
     */
    public $realServer;

    /**
     * @var int
     */
    public $frontPort;

    /**
     * @var string
     */
    public $frontProtocol;
    protected $_name = [
        'backProtocol'  => 'BackProtocol',
        'backPort'      => 'BackPort',
        'lbId'          => 'LbId',
        'ip'            => 'Ip',
        'lvsType'       => 'LvsType',
        'realServer'    => 'RealServer',
        'frontPort'     => 'FrontPort',
        'frontProtocol' => 'FrontProtocol',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backProtocol) {
            $res['BackProtocol'] = $this->backProtocol;
        }
        if (null !== $this->backPort) {
            $res['BackPort'] = $this->backPort;
        }
        if (null !== $this->lbId) {
            $res['LbId'] = $this->lbId;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->lvsType) {
            $res['LvsType'] = $this->lvsType;
        }
        if (null !== $this->realServer) {
            $res['RealServer'] = $this->realServer;
        }
        if (null !== $this->frontPort) {
            $res['FrontPort'] = $this->frontPort;
        }
        if (null !== $this->frontProtocol) {
            $res['FrontProtocol'] = $this->frontProtocol;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackProtocol'])) {
            $model->backProtocol = $map['BackProtocol'];
        }
        if (isset($map['BackPort'])) {
            $model->backPort = $map['BackPort'];
        }
        if (isset($map['LbId'])) {
            $model->lbId = $map['LbId'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['LvsType'])) {
            $model->lvsType = $map['LvsType'];
        }
        if (isset($map['RealServer'])) {
            $model->realServer = $map['RealServer'];
        }
        if (isset($map['FrontPort'])) {
            $model->frontPort = $map['FrontPort'];
        }
        if (isset($map['FrontProtocol'])) {
            $model->frontProtocol = $map['FrontProtocol'];
        }

        return $model;
    }
}
