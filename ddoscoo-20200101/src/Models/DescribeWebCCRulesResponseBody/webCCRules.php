<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebCCRulesResponseBody;

use AlibabaCloud\Tea\Model;

class webCCRules extends Model
{
    /**
     * @description The blocking type. Valid values:
     *
     *   **close**: blocks requests.
     *   **captcha**: enables Completely Automated Public Turing test to tell Computers and Humans Apart (CAPTCHA) verification.
     *
     * @example close
     *
     * @var string
     */
    public $act;

    /**
     * @description The number of requests that are allowed from an individual IP address. Valid values: **2** to **2000**.
     *
     * @example 3
     *
     * @var int
     */
    public $count;

    /**
     * @description The check intervals. Valid values: **5** to **10800**. Unit: seconds.
     *
     * @example 5
     *
     * @var int
     */
    public $interval;

    /**
     * @description The match mode. Valid values:
     *
     *   **prefix**: prefix match
     *   **match**: exact match
     *
     * @example prefix
     *
     * @var string
     */
    public $mode;

    /**
     * @description The name of the rule.
     *
     * @example wq
     *
     * @var string
     */
    public $name;

    /**
     * @description The blocking duration. Valid values: **1** to **1440**. Unit: minutes.
     *
     * @example 60
     *
     * @var int
     */
    public $ttl;

    /**
     * @description The check path.
     *
     * @example /hello
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
     * @return webCCRules
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
