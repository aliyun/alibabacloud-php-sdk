<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rdc\V20180821\Models;

use AlibabaCloud\Tea\Model;

class GetChangeLogRequest extends Model
{
    /**
     * @var string
     */
    public $targetType;

    /**
     * @var mixed[]
     */
    public $targetIds;

    /**
     * @var string
     */
    public $corpIdentifier;
    protected $_name = [
        'targetType'     => 'TargetType',
        'targetIds'      => 'TargetIds',
        'corpIdentifier' => 'CorpIdentifier',
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
        if (null !== $this->targetIds) {
            $res['TargetIds'] = $this->targetIds;
        }
        if (null !== $this->corpIdentifier) {
            $res['CorpIdentifier'] = $this->corpIdentifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetChangeLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['TargetIds'])) {
            $model->targetIds = $map['TargetIds'];
        }
        if (isset($map['CorpIdentifier'])) {
            $model->corpIdentifier = $map['CorpIdentifier'];
        }

        return $model;
    }
}
