<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeMigrationPreferencesResponseBody;

use AlibabaCloud\Tea\Model;

class targetZoneIdSet extends Model
{
    /**
     * @var string[]
     */
    public $targetZoneId;
    protected $_name = [
        'targetZoneId' => 'TargetZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->targetZoneId) {
            $res['TargetZoneId'] = $this->targetZoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return targetZoneIdSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TargetZoneId'])) {
            if (!empty($map['TargetZoneId'])) {
                $model->targetZoneId = $map['TargetZoneId'];
            }
        }

        return $model;
    }
}
