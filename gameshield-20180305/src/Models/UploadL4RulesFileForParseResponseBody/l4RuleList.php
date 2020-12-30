<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models\UploadL4RulesFileForParseResponseBody;

use AlibabaCloud\Tea\Model;

class l4RuleList extends Model
{
    /**
     * @var string
     */
    public $protocol;

    /**
     * @var int
     */
    public $appId;

    /**
     * @var int
     */
    public $backPort;

    /**
     * @var int
     */
    public $bizId;

    /**
     * @var string[]
     */
    public $rservers;

    /**
     * @var string
     */
    public $lvsPolicy;

    /**
     * @var int
     */
    public $frontPort;

    /**
     * @var string
     */
    public $ruleId;
    protected $_name = [
        'protocol'  => 'Protocol',
        'appId'     => 'AppId',
        'backPort'  => 'BackPort',
        'bizId'     => 'BizId',
        'rservers'  => 'Rservers',
        'lvsPolicy' => 'LvsPolicy',
        'frontPort' => 'FrontPort',
        'ruleId'    => 'RuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->backPort) {
            $res['BackPort'] = $this->backPort;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->rservers) {
            $res['Rservers'] = $this->rservers;
        }
        if (null !== $this->lvsPolicy) {
            $res['LvsPolicy'] = $this->lvsPolicy;
        }
        if (null !== $this->frontPort) {
            $res['FrontPort'] = $this->frontPort;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return l4RuleList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['BackPort'])) {
            $model->backPort = $map['BackPort'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['Rservers'])) {
            if (!empty($map['Rservers'])) {
                $model->rservers = $map['Rservers'];
            }
        }
        if (isset($map['LvsPolicy'])) {
            $model->lvsPolicy = $map['LvsPolicy'];
        }
        if (isset($map['FrontPort'])) {
            $model->frontPort = $map['FrontPort'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
