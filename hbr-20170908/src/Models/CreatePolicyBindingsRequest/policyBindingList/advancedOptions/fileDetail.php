<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\CreatePolicyBindingsRequest\policyBindingList\advancedOptions;

use AlibabaCloud\Tea\Model;

class fileDetail extends Model
{
    /**
     * @var bool
     */
    public $advPolicy;

    /**
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
