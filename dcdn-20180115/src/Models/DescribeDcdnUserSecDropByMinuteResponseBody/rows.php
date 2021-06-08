<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserSecDropByMinuteResponseBody;

use AlibabaCloud\Tea\Model;

class rows extends Model
{
    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $tmStr;

    /**
     * @var int
     */
    public $drops;

    /**
     * @var string
     */
    public $object;

    /**
     * @var string
     */
    public $secFunc;

    /**
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'domain'   => 'Domain',
        'tmStr'    => 'TmStr',
        'drops'    => 'Drops',
        'object'   => 'Object',
        'secFunc'  => 'SecFunc',
        'ruleName' => 'RuleName',
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
        if (null !== $this->tmStr) {
            $res['TmStr'] = $this->tmStr;
        }
        if (null !== $this->drops) {
            $res['Drops'] = $this->drops;
        }
        if (null !== $this->object) {
            $res['Object'] = $this->object;
        }
        if (null !== $this->secFunc) {
            $res['SecFunc'] = $this->secFunc;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
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
        if (isset($map['TmStr'])) {
            $model->tmStr = $map['TmStr'];
        }
        if (isset($map['Drops'])) {
            $model->drops = $map['Drops'];
        }
        if (isset($map['Object'])) {
            $model->object = $map['Object'];
        }
        if (isset($map['SecFunc'])) {
            $model->secFunc = $map['SecFunc'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        return $model;
    }
}
