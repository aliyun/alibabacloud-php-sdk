<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainSecurityProfileResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description Indicates whether the global mitigation policy is enabled. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $globalEnable;

    /**
     * @description The mode of the global mitigation policy. Valid values:
     *
     *   **weak**: the Low mode
     *   **default**: the Normal mode
     *   **hard**: the Strict mode
     *
     * @example default
     *
     * @var string
     */
    public $globalMode;
    protected $_name = [
        'globalEnable' => 'GlobalEnable',
        'globalMode'   => 'GlobalMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->globalEnable) {
            $res['GlobalEnable'] = $this->globalEnable;
        }
        if (null !== $this->globalMode) {
            $res['GlobalMode'] = $this->globalMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GlobalEnable'])) {
            $model->globalEnable = $map['GlobalEnable'];
        }
        if (isset($map['GlobalMode'])) {
            $model->globalMode = $map['GlobalMode'];
        }

        return $model;
    }
}
