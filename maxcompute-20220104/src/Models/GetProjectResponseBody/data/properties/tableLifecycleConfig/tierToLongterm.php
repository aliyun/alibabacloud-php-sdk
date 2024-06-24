<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetProjectResponseBody\data\properties\tableLifecycleConfig;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetProjectResponseBody\data\properties\tableLifecycleConfig\tierToLongterm\daysAfterLastAccessGreaterThan;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetProjectResponseBody\data\properties\tableLifecycleConfig\tierToLongterm\daysAfterLastModificationGreaterThan;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetProjectResponseBody\data\properties\tableLifecycleConfig\tierToLongterm\daysAfterLastTierModificationGreaterThan;
use AlibabaCloud\Tea\Model;

class tierToLongterm extends Model
{
    /**
     * @var daysAfterLastAccessGreaterThan
     */
    public $daysAfterLastAccessGreaterThan;

    /**
     * @var daysAfterLastModificationGreaterThan
     */
    public $daysAfterLastModificationGreaterThan;

    /**
     * @var daysAfterLastTierModificationGreaterThan
     */
    public $daysAfterLastTierModificationGreaterThan;
    protected $_name = [
        'daysAfterLastAccessGreaterThan'           => 'daysAfterLastAccessGreaterThan',
        'daysAfterLastModificationGreaterThan'     => 'daysAfterLastModificationGreaterThan',
        'daysAfterLastTierModificationGreaterThan' => 'daysAfterLastTierModificationGreaterThan',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->daysAfterLastAccessGreaterThan) {
            $res['daysAfterLastAccessGreaterThan'] = null !== $this->daysAfterLastAccessGreaterThan ? $this->daysAfterLastAccessGreaterThan->toMap() : null;
        }
        if (null !== $this->daysAfterLastModificationGreaterThan) {
            $res['daysAfterLastModificationGreaterThan'] = null !== $this->daysAfterLastModificationGreaterThan ? $this->daysAfterLastModificationGreaterThan->toMap() : null;
        }
        if (null !== $this->daysAfterLastTierModificationGreaterThan) {
            $res['daysAfterLastTierModificationGreaterThan'] = null !== $this->daysAfterLastTierModificationGreaterThan ? $this->daysAfterLastTierModificationGreaterThan->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tierToLongterm
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['daysAfterLastAccessGreaterThan'])) {
            $model->daysAfterLastAccessGreaterThan = daysAfterLastAccessGreaterThan::fromMap($map['daysAfterLastAccessGreaterThan']);
        }
        if (isset($map['daysAfterLastModificationGreaterThan'])) {
            $model->daysAfterLastModificationGreaterThan = daysAfterLastModificationGreaterThan::fromMap($map['daysAfterLastModificationGreaterThan']);
        }
        if (isset($map['daysAfterLastTierModificationGreaterThan'])) {
            $model->daysAfterLastTierModificationGreaterThan = daysAfterLastTierModificationGreaterThan::fromMap($map['daysAfterLastTierModificationGreaterThan']);
        }

        return $model;
    }
}
