<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePolicyBindingsResponseBody\policyBindings\advancedOptions;

use AlibabaCloud\Tea\Model;

class fileDetail extends Model
{
    /**
     * @description Indicates whether an advanced policy is used. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $advPolicy;

    /**
     * @description Indicates whether the Volume Shadow Copy Service (VSS) feature is enabled. Valid values:
     *
     *   **true**: The feature is enabled.
     *   **false**: The feature is disabled.
     *
     * @example false
     *
     * @var bool
     */
    public $useVSS;
    protected $_name = [
        'advPolicy' => 'AdvPolicy',
        'useVSS'    => 'UseVSS',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->advPolicy) {
            $res['AdvPolicy'] = $this->advPolicy;
        }
        if (null !== $this->useVSS) {
            $res['UseVSS'] = $this->useVSS;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fileDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdvPolicy'])) {
            $model->advPolicy = $map['AdvPolicy'];
        }
        if (isset($map['UseVSS'])) {
            $model->useVSS = $map['UseVSS'];
        }

        return $model;
    }
}
