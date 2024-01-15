<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\conditions\conditions;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\conditions\conditions\checkRange\anchor;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\conditions\conditions\checkRange\range;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\conditions\conditions\checkRange\timeRange;
use AlibabaCloud\Tea\Model;

class checkRange extends Model
{
    /**
     * @description false: 相对位置; 会结合anchor以及角色来决定句子位置
     *
     * @var bool
     */
    public $absolute;

    /**
     * @description true: 每句话都必须满足条件；
     *
     * @var bool
     */
    public $allSentencesSatisfy;

    /**
     * @description 前置后置条件
     *
     * @var anchor
     */
    public $anchor;

    /**
     * @description 相对范围
     *
     * @var range
     */
    public $range;

    /**
     * @description 对应 RoleType.type
     *
     * @var string
     */
    public $role;

    /**
     * @description 对应 RoleType.id
     *
     * @var int
     */
    public $roleId;

    /**
     * @var timeRange
     */
    public $timeRange;
    protected $_name = [
        'absolute'            => 'Absolute',
        'allSentencesSatisfy' => 'AllSentencesSatisfy',
        'anchor'              => 'Anchor',
        'range'               => 'Range',
        'role'                => 'Role',
        'roleId'              => 'RoleId',
        'timeRange'           => 'TimeRange',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->timeRange) {
            $res['TimeRange'] = null !== $this->timeRange ? $this->timeRange->toMap() : null;
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
        if (isset($map['TimeRange'])) {
            $model->timeRange = timeRange::fromMap($map['TimeRange']);
        }

        return $model;
    }
}
