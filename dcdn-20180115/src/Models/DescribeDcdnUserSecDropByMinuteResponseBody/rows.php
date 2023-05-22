<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserSecDropByMinuteResponseBody;

use AlibabaCloud\Tea\Model;

class rows extends Model
{
    /**
     * @description The security feature that blocked the packets.
     *
     * @example example.aliyundoc.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description >  The maximum number of times that users can call this operation per second is 50.
     *
     * @example 264
     *
     * @var int
     */
    public $drops;

    /**
     * @description The total number of entries returned.
     *
     * @example The number of the page to return. Pages start from page 1.
     *
     * @var string
     */
    public $object;

    /**
     * @description The total number of entries returned.
     *
     * @example The rule that was triggered.
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The array returned.
     *
     * @example robot
     *
     * @var string
     */
    public $secFunc;

    /**
     * @description The rule that is triggered.
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
