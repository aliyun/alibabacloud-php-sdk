<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeLayer7CCRulesResponseBody;

use AlibabaCloud\Tea\Model;

class layer7CCRules extends Model
{
    /**
     * @example close
     *
     * @var string
     */
    public $act;

    /**
     * @example 100
     *
     * @var int
     */
    public $count;

    /**
     * @example 60
     *
     * @var int
     */
    public $interval;

    /**
     * @example match
     *
     * @var string
     */
    public $mode;

    /**
     * @example testCcRule1
     *
     * @var string
     */
    public $name;

    /**
     * @example 1000
     *
     * @var int
     */
    public $ttl;

    /**
     * @example /a/b/c
     *
     * @var string
     */
    public $uri;
    protected $_name = [
        'act'      => 'Act',
        'count'    => 'Count',
        'interval' => 'Interval',
        'mode'     => 'Mode',
        'name'     => 'Name',
        'ttl'      => 'Ttl',
        'uri'      => 'Uri',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->act) {
            $res['Act'] = $this->act;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }
        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return layer7CCRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Act'])) {
            $model->act = $map['Act'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }
        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }

        return $model;
    }
}
