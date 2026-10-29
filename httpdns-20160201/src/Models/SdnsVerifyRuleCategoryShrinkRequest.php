<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Httpdns\V20160201\Models;

use AlibabaCloud\Dara\Model;

class SdnsVerifyRuleCategoryShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $argsShrink;

    /**
     * @var string
     */
    public $cip;

    /**
     * @var string
     */
    public $clientIpRangesShrink;

    /**
     * @var string
     */
    public $matchType;

    /**
     * @var string
     */
    public $rulesShrink;
    protected $_name = [
        'argsShrink' => 'Args',
        'cip' => 'Cip',
        'clientIpRangesShrink' => 'ClientIpRanges',
        'matchType' => 'MatchType',
        'rulesShrink' => 'Rules',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->argsShrink) {
            $res['Args'] = $this->argsShrink;
        }

        if (null !== $this->cip) {
            $res['Cip'] = $this->cip;
        }

        if (null !== $this->clientIpRangesShrink) {
            $res['ClientIpRanges'] = $this->clientIpRangesShrink;
        }

        if (null !== $this->matchType) {
            $res['MatchType'] = $this->matchType;
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
        if (isset($map['Args'])) {
            $model->argsShrink = $map['Args'];
        }

        if (isset($map['Cip'])) {
            $model->cip = $map['Cip'];
        }

        if (isset($map['ClientIpRanges'])) {
            $model->clientIpRangesShrink = $map['ClientIpRanges'];
        }

        if (isset($map['MatchType'])) {
            $model->matchType = $map['MatchType'];
        }

        if (isset($map['Rules'])) {
            $model->rulesShrink = $map['Rules'];
        }

        return $model;
    }
}
