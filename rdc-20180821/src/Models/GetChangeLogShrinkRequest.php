<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rdc\V20180821\Models;

use AlibabaCloud\Tea\Model;

class GetChangeLogShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $targetType;

    /**
     * @var string
     */
    public $targetIdsShrink;

    /**
     * @var string
     */
    public $corpIdentifier;
    protected $_name = [
        'targetType'      => 'TargetType',
        'targetIdsShrink' => 'TargetIds',
        'corpIdentifier'  => 'CorpIdentifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->targetIdsShrink) {
            $res['TargetIds'] = $this->targetIdsShrink;
        }
        if (null !== $this->corpIdentifier) {
            $res['CorpIdentifier'] = $this->corpIdentifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetChangeLogShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['TargetIds'])) {
            $model->targetIdsShrink = $map['TargetIds'];
        }
        if (isset($map['CorpIdentifier'])) {
            $model->corpIdentifier = $map['CorpIdentifier'];
        }

        return $model;
    }
}
