<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserSecDropByMinuteResponseBody;

use AlibabaCloud\Tea\Model;

class rows extends Model
{
    /**
     * @description The domain name.
     *
     * @example example.aliyundoc.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The number of packets blocked within 5 minutes.
     *
     * @example 264
     *
     * @var int
     */
    public $drops;

    /**
     * @description The object that triggered the rule.
     *
     * @var string
     */
    public $object;

    /**
     * @description The rule that is triggered.
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The security feature that blocked the packets.
     *
     * @example robot
     *
     * @var string
     */
    public $secFunc;

    /**
     * @description The beginning of the time range that was queried. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is in UTC+0.
     *
     * @example 2021-01-31T15:04:04Z
     *
     * @var string
     */
    public $tmStr;
    protected $_name = [
        'domain'   => 'Domain',
        'drops'    => 'Drops',
        'object'   => 'Object',
        'ruleName' => 'RuleName',
        'secFunc'  => 'SecFunc',
        'tmStr'    => 'TmStr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->drops) {
            $res['Drops'] = $this->drops;
        }
        if (null !== $this->object) {
            $res['Object'] = $this->object;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->secFunc) {
            $res['SecFunc'] = $this->secFunc;
        }
        if (null !== $this->tmStr) {
            $res['TmStr'] = $this->tmStr;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rows
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Drops'])) {
            $model->drops = $map['Drops'];
        }
        if (isset($map['Object'])) {
            $model->object = $map['Object'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['SecFunc'])) {
            $model->secFunc = $map['SecFunc'];
        }
        if (isset($map['TmStr'])) {
            $model->tmStr = $map['TmStr'];
        }

        return $model;
    }
}
