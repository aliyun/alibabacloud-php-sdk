<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ModifyDesktopOversoldGroupSaleRequest extends Model
{
    /**
     * @var int
     */
    public $concurrenceCount;

    /**
     * @var string
     */
    public $oversoldGroupId;

    /**
     * @var int
     */
    public $oversoldUserCount;
    protected $_name = [
        'concurrenceCount'  => 'ConcurrenceCount',
        'oversoldGroupId'   => 'OversoldGroupId',
        'oversoldUserCount' => 'OversoldUserCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->concurrenceCount) {
            $res['ConcurrenceCount'] = $this->concurrenceCount;
        }
        if (null !== $this->oversoldGroupId) {
            $res['OversoldGroupId'] = $this->oversoldGroupId;
        }
        if (null !== $this->oversoldUserCount) {
            $res['OversoldUserCount'] = $this->oversoldUserCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDesktopOversoldGroupSaleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConcurrenceCount'])) {
            $model->concurrenceCount = $map['ConcurrenceCount'];
        }
        if (isset($map['OversoldGroupId'])) {
            $model->oversoldGroupId = $map['OversoldGroupId'];
        }
        if (isset($map['OversoldUserCount'])) {
            $model->oversoldUserCount = $map['OversoldUserCount'];
        }

        return $model;
    }
}
