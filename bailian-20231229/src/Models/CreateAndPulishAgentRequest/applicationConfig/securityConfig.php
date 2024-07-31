<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\CreateAndPulishAgentRequest\applicationConfig;

use AlibabaCloud\Tea\Model;

class securityConfig extends Model
{
    /**
     * @var string
     */
    public $processingStrategy;
    protected $_name = [
        'processingStrategy' => 'processingStrategy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->processingStrategy) {
            $res['processingStrategy'] = $this->processingStrategy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['processingStrategy'])) {
            $model->processingStrategy = $map['processingStrategy'];
        }

        return $model;
    }
}
