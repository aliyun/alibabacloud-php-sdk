<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePolicyBindingsResponseBody\policyBindings\advancedOptions;

use AlibabaCloud\Tea\Model;

class commonNasDetail extends Model
{
    /**
     * @description Backup client ID.
     *
     * @example c-0001eg6mcvjs93f46s2d
     *
     * @var string
     */
    public $clientId;

    /**
     * @description Client group ID.
     *
     * @example cl-000gkcofngi04j6k680a
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description Backup slice size (number of files).
     *
     * @example 100000
     *
     * @var int
     */
    public $fetchSliceSize;

    /**
     * @description Whether to switch to a full backup when an incremental backup fails. Values:
     * - **true**: Switch to full backup on failure.
     * - **false**: Do not switch to full backup on failure.
     * @example true
     *
     * @var bool
     */
    public $fullOnIncrementFail;
    protected $_name = [
        'clientId'            => 'ClientId',
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
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
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
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
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
