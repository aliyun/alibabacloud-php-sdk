<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListListenersByConfigResponseBody;

use AlibabaCloud\Dara\Model;

class listeners extends Model
{
    /**
     * @var string
     */
    public $ip;

    /**
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
     * @var string
     */
    public $md5;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'ip' => 'Ip',
        'labels' => 'Labels',
        'matchRuleName' => 'MatchRuleName',
        'matchRuleType' => 'MatchRuleType',
        'md5' => 'Md5',
        'status' => 'Status',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                foreach ($this->labels as $key1 => $value1) {
                    $res['Labels'][$key1] = $value1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                foreach ($map['Labels'] as $key1 => $value1) {
                    $model->labels[$key1] = $value1;
                }
            }
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
