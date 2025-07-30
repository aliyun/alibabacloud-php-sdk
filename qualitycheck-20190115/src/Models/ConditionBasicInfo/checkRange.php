<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ConditionBasicInfo;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ConditionBasicInfo\checkRange\anchor;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ConditionBasicInfo\checkRange\range;
use AlibabaCloud\Tea\Model;

class checkRange extends Model
{
    /**
     * @var bool
     */
    public $absolute;

    /**
     * @var bool
     */
    public $allSentencesSatisfy;

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

    /**
     * @var int
     */
    public $roleId;
    protected $_name = [
        'absolute' => 'Absolute',
        'allSentencesSatisfy' => 'AllSentencesSatisfy',
        'anchor' => 'Anchor',
        'range' => 'Range',
        'role' => 'Role',
        'roleId' => 'RoleId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->absolute) {
            $res['Absolute'] = $this->absolute;
        }
        if (null !== $this->allSentencesSatisfy) {
            $res['AllSentencesSatisfy'] = $this->allSentencesSatisfy;
        }
        if (null !== $this->anchor) {
            $res['Anchor'] = null !== $this->anchor ? $this->anchor->toMap() : null;
        }
        if (null !== $this->range) {
            $res['Range'] = null !== $this->range ? $this->range->toMap() : null;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
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
        if (isset($map['Absolute'])) {
            $model->absolute = $map['Absolute'];
        }
        if (isset($map['AllSentencesSatisfy'])) {
            $model->allSentencesSatisfy = $map['AllSentencesSatisfy'];
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
        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }

        return $model;
    }
}
