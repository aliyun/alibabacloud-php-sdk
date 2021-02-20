<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ConfigNetworkRulesRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $networkRules;
    protected $_name = [
        'sourceIp'     => 'SourceIp',
        'networkRules' => 'NetworkRules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->networkRules) {
            $res['NetworkRules'] = $this->networkRules;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigNetworkRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['NetworkRules'])) {
            $model->networkRules = $map['NetworkRules'];
        }

        return $model;
    }
}
