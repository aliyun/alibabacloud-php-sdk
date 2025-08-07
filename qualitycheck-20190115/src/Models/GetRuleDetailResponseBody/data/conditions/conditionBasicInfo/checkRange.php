<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\conditions\conditionBasicInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\conditions\conditionBasicInfo\checkRange\anchor;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\conditions\conditionBasicInfo\checkRange\range;

class checkRange extends Model
{
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

    /**
     * @var string
     */
    public $role;
    protected $_name = [
        'absolute' => 'Absolute',
        'anchor' => 'Anchor',
        'range' => 'Range',
        'role' => 'Role',
    ];

    public function validate()
    {
        if (null !== $this->anchor) {
            $this->anchor->validate();
        }
        if (null !== $this->range) {
            $this->range->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->absolute) {
            $res['Absolute'] = $this->absolute;
        }

        if (null !== $this->anchor) {
            $res['Anchor'] = null !== $this->anchor ? $this->anchor->toArray($noStream) : $this->anchor;
        }

        if (null !== $this->range) {
            $res['Range'] = null !== $this->range ? $this->range->toArray($noStream) : $this->range;
        }

        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Absolute'])) {
            $model->absolute = $map['Absolute'];
        }

        if (isset($map['Anchor'])) {
            $model->anchor = anchor::fromMap($map['Anchor']);
        }

        if (isset($map['Range'])) {
            $model->range = range::fromMap($map['Range']);
        }

        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        return $model;
    }
}
