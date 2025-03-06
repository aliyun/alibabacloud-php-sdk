<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\CreatePolicyBindingsRequest\policyBindingList\advancedOptions;

use AlibabaCloud\Tea\Model;

class commonNasDetail extends Model
{
    /**
     * @description The ID of the backup client group. When you perform on-premises NAS backup, Cloud Backup selects clients from the specified backup client group.
     *
     * @example cl-000**************ggu
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The size of backup shards (the number of files).
     *
     * @example 100000
     *
     * @var int
     */
    public $fetchSliceSize;

    /**
     * @description Specifies whether the system performs full backup if incremental backup fails. Valid values:
     *
     *   **true**: The system performs full backup if incremental backup fails.
     *   **false**: The system does not perform full backup if incremental backup fails.
     *
     * @example true
     *
     * @var bool
     */
    public $fullOnIncrementFail;
    protected $_name = [
        'clusterId'           => 'ClusterId',
        'fetchSliceSize'      => 'FetchSliceSize',
        'fullOnIncrementFail' => 'FullOnIncrementFail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->fetchSliceSize) {
            $res['FetchSliceSize'] = $this->fetchSliceSize;
        }
        if (null !== $this->fullOnIncrementFail) {
            $res['FullOnIncrementFail'] = $this->fullOnIncrementFail;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return commonNasDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['FetchSliceSize'])) {
            $model->fetchSliceSize = $map['FetchSliceSize'];
        }
        if (isset($map['FullOnIncrementFail'])) {
            $model->fullOnIncrementFail = $map['FullOnIncrementFail'];
        }

        return $model;
    }
}
