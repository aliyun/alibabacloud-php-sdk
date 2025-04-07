<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePolicyBindingsResponseBody\policyBindings\advancedOptions;

use AlibabaCloud\Tea\Model;

class fileDetail extends Model
{
    /**
     * @description Whether to use advanced policies. Values:
     * - **true**: Use.
     * - **false**: Do not use.
     *
     * @example false
     *
     * @var bool
     */
    public $advPolicy;

    /**
     * @description Whether to enable VSS (Windows) functionality. Values:
     * - **true**: Enable.
     * - **false**: Disable.
     *
     * @example false
     *
     * @var bool
     */
    public $useVSS;
    protected $_name = [
        'advPolicy' => 'AdvPolicy',
        'useVSS' => 'UseVSS',
    ];

    public function validate() {}

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
