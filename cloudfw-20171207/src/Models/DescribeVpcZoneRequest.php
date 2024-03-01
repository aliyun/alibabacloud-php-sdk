<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribeVpcZoneRequest extends Model
{
    /**
     * @example VPC
     *
     * @var string
     */
    public $environment;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @example 1415189284827022
     *
     * @var string
     */
    public $memberUid;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionNo;
    protected $_name = [
        'environment' => 'Environment',
        'lang'        => 'Lang',
        'memberUid'   => 'MemberUid',
        'regionNo'    => 'RegionNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->environment) {
            $res['Environment'] = $this->environment;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }
        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVpcZoneRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Environment'])) {
            $model->environment = $map['Environment'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }
        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }

        return $model;
    }
}
