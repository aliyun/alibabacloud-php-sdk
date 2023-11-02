<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class DoSelfDelegateRequest extends Model
{
    /**
     * @example 104423523217****
     *
     * @var int
     */
    public $aliUid;

    /**
     * @example 1
     *
     * @var int
     */
    public $delegateOrNot;

    /**
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
