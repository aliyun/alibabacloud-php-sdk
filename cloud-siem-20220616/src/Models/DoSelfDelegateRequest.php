<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class DoSelfDelegateRequest extends Model
{
    /**
     * @description The Alibaba Cloud account of an ordinary member of the threat analysis feature.
     *
     * @example 104423523217****
     *
     * @var int
     */
    public $aliUid;

    /**
     * @description Specifies whether to use a delegated administrator account. Valid values:
     *
     *   1: use a delegated administrator account.
     *   0: do not use a delegated administrator account.
     *
     * @example 1
     *
     * @var int
     */
    public $delegateOrNot;

    /**
     * @description The region in which the data management center of the threat analysis feature resides. Specify this parameter based on the region where your assets reside. Valid values:
     *
     *   cn-hangzhou: Your assets reside in regions inside the Chinese mainland or in the China (Hong Kong) region.
     *   ap-southeast-1: Your assets reside in regions outside the Chinese mainland, excluding the China (Hong Kong) region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'aliUid'        => 'AliUid',
        'delegateOrNot' => 'DelegateOrNot',
        'regionId'      => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->delegateOrNot) {
            $res['DelegateOrNot'] = $this->delegateOrNot;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DoSelfDelegateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['DelegateOrNot'])) {
            $model->delegateOrNot = $map['DelegateOrNot'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
