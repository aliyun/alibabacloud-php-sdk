<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeLayer7CCRulesResponse;

use AlibabaCloud\Tea\Model;

class layer7CCRules extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $act;

    /**
     * @var int
     */
    public $count;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var int
     */
    public $ttl;

    /**
     * @var string
     */
    public $uri;
    protected $_name = [
        'name'     => 'Name',
        'act'      => 'Act',
        'count'    => 'Count',
        'interval' => 'Interval',
        'mode'     => 'Mode',
        'ttl'      => 'Ttl',
        'uri'      => 'Uri',
    ];

    public function validate()
    {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('act', $this->act, true);
        Model::validateRequired('count', $this->count, true);
        Model::validateRequired('interval', $this->interval, true);
        Model::validateRequired('mode', $this->mode, true);
        Model::validateRequired('ttl', $this->ttl, true);
        Model::validateRequired('uri', $this->uri, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
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
        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }
        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }

        return $model;
    }
}
