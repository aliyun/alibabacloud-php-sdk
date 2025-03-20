<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\WafRuleConfig;

use AlibabaCloud\SDK\ESA\V20240910\Models\WafRuleConfig\actions\bypass;
use AlibabaCloud\SDK\ESA\V20240910\Models\WafRuleConfig\actions\response;
use AlibabaCloud\Tea\Model;

class actions extends Model
{
    /**
     * @var bypass
     */
    public $bypass;

    /**
     * @var response
     */
    public $response;
    protected $_name = [
        'bypass' => 'Bypass',
        'response' => 'Response',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bypass) {
            $res['Bypass'] = null !== $this->bypass ? $this->bypass->toMap() : null;
        }
        if (null !== $this->response) {
            $res['Response'] = null !== $this->response ? $this->response->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return actions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bypass'])) {
            $model->bypass = bypass::fromMap($map['Bypass']);
        }
        if (isset($map['Response'])) {
            $model->response = response::fromMap($map['Response']);
        }

        return $model;
    }
}
