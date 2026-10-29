<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Httpdns\V20160201\Models;

use AlibabaCloud\Dara\Model;

class CreateSdnsRuleCategoryShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $clientIpRangesShrink;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $lineId;

    /**
     * @var string
     */
    public $matchType;

    /**
     * @var string
     */
    public $pathsShrink;

    /**
     * @var string
     */
    public $rulesShrink;
    protected $_name = [
        'clientIpRangesShrink' => 'ClientIpRanges',
        'domainName' => 'DomainName',
        'enable' => 'Enable',
        'lineId' => 'LineId',
        'matchType' => 'MatchType',
        'pathsShrink' => 'Paths',
        'rulesShrink' => 'Rules',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientIpRangesShrink) {
            $res['ClientIpRanges'] = $this->clientIpRangesShrink;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->lineId) {
            $res['LineId'] = $this->lineId;
        }

        if (null !== $this->matchType) {
            $res['MatchType'] = $this->matchType;
        }

        if (null !== $this->pathsShrink) {
            $res['Paths'] = $this->pathsShrink;
        }

        if (null !== $this->rulesShrink) {
            $res['Rules'] = $this->rulesShrink;
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
        if (isset($map['ClientIpRanges'])) {
            $model->clientIpRangesShrink = $map['ClientIpRanges'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        if (isset($map['LineId'])) {
            $model->lineId = $map['LineId'];
        }

        if (isset($map['MatchType'])) {
            $model->matchType = $map['MatchType'];
        }

        if (isset($map['Paths'])) {
            $model->pathsShrink = $map['Paths'];
        }

        if (isset($map['Rules'])) {
            $model->rulesShrink = $map['Rules'];
        }

        return $model;
    }
}
