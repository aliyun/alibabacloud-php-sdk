<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListListenersByConfigResponseBody;

use AlibabaCloud\Tea\Model;

class listeners extends Model
{
    /**
     * @description The IP address.
     *
     * @example 1.1.1.1
     *
     * @var string
     */
    public $ip;

    /**
     * @description The label of the listener.
     *
     * @var string[]
     */
    public $labels;

    /**
     * @var string
     */
    public $matchRuleName;

    /**
     * @var string
     */
    public $matchRuleType;

    /**
     * @description The verification string.
     *
     * @example 23sdfdf
     *
     * @var string
     */
    public $md5;

    /**
     * @description The status.
     *
     * @example beta
     *
     * @var string
     */
    public $status;

    /**
     * @description The current version of the listener. Valid values: gray and normal.
     *
     * @example gray
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'ip'            => 'Ip',
        'labels'        => 'Labels',
        'matchRuleName' => 'MatchRuleName',
        'matchRuleType' => 'MatchRuleType',
        'md5'           => 'Md5',
        'status'        => 'Status',
        'version'       => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->matchRuleName) {
            $res['MatchRuleName'] = $this->matchRuleName;
        }
        if (null !== $this->matchRuleType) {
            $res['MatchRuleType'] = $this->matchRuleType;
        }
        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listeners
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['MatchRuleName'])) {
            $model->matchRuleName = $map['MatchRuleName'];
        }
        if (isset($map['MatchRuleType'])) {
            $model->matchRuleType = $map['MatchRuleType'];
        }
        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
