<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\conditions\conditionBasicInfo;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\conditions\conditionBasicInfo\checkRange\anchor;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\conditions\conditionBasicInfo\checkRange\range;
use AlibabaCloud\Tea\Model;

class checkRange extends Model
{
    /**
     * @var string
     */
    public $role;

    /**
     * @var bool
     */
    public $absolute;

    /**
     * @var anchor
     */
    public $anchor;

    /**
     * @var range
     */
    public $range;
    protected $_name = [
        'role'     => 'Role',
        'absolute' => 'Absolute',
        'anchor'   => 'Anchor',
        'range'    => 'Range',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->absolute) {
            $res['Absolute'] = $this->absolute;
        }
        if (null !== $this->anchor) {
            $res['Anchor'] = null !== $this->anchor ? $this->anchor->toMap() : null;
        }
        if (null !== $this->range) {
            $res['Range'] = null !== $this->range ? $this->range->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return checkRange
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['Absolute'])) {
            $model->absolute = $map['Absolute'];
        }
        if (isset($map['Anchor'])) {
            $model->anchor = anchor::fromMap($map['Anchor']);
        }
        if (isset($map['Range'])) {
            $model->range = range::fromMap($map['Range']);
        }

        return $model;
    }
}
