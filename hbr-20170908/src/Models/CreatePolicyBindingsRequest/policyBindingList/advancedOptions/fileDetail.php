<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\CreatePolicyBindingsRequest\policyBindingList\advancedOptions;

use AlibabaCloud\Tea\Model;

class fileDetail extends Model
{
    /**
     * @description Specifies whether to use an advanced policy. Valid values:
     *
     *   **true**: uses the advanced policy.
     *   **false**: does not use the advanced policy.
     *
     * @example true
     *
     * @var bool
     */
    public $advPolicy;

    /**
     * @description Specifies whether to enable the Volume Shadow Copy Service (VSS) feature. Valid values:
     *
     *   **true**: enables the feature.
     *   **false**: disables the feature.
     *
     * @example true
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
