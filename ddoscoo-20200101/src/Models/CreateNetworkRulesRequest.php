<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class CreateNetworkRulesRequest extends Model
{
    /**
     * @var string
     */
    public $networkRules;
    protected $_name = [
        'networkRules' => 'NetworkRules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkRules) {
            $res['NetworkRules'] = $this->networkRules;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateNetworkRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkRules'])) {
            $model->networkRules = $map['NetworkRules'];
        }

        return $model;
    }
}
