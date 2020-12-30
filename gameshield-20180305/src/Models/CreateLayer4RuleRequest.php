<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\Tea\Model;

class CreateLayer4RuleRequest extends Model
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
     * @var int
     */
    public $appId;

    /**
     * @var int
     */
    public $bizId;

    /**
     * @var int
     */
    public $frontPort;

    /**
     * @var int
     */
    public $backPort;

    /**
     * @var string
     */
    public $rservers;
    protected $_name = [
        'sourceIp'  => 'SourceIp',
        'lang'      => 'Lang',
        'appId'     => 'AppId',
        'bizId'     => 'BizId',
        'frontPort' => 'FrontPort',
        'backPort'  => 'BackPort',
        'rservers'  => 'Rservers',
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
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->frontPort) {
            $res['FrontPort'] = $this->frontPort;
        }
        if (null !== $this->backPort) {
            $res['BackPort'] = $this->backPort;
        }
        if (null !== $this->rservers) {
            $res['Rservers'] = $this->rservers;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLayer4RuleRequest
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['FrontPort'])) {
            $model->frontPort = $map['FrontPort'];
        }
        if (isset($map['BackPort'])) {
            $model->backPort = $map['BackPort'];
        }
        if (isset($map['Rservers'])) {
            $model->rservers = $map['Rservers'];
        }

        return $model;
    }
}
