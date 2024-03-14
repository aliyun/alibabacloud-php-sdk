<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribeVpcZoneRequest extends Model
{
    /**
     * @description The environment. Valid values:
     *
     *   **VPC**
     *   **TransitRouter**
     *
     * @example VPC
     *
     * @var string
     */
    public $environment;

    /**
     * @description The language of the content within the request and response. Valid values:
     *
     *   **zh** (default): Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The UID of the member in Cloud Firewall.
     *
     * @example 1415189284827022
     *
     * @var string
     */
    public $memberUid;

    /**
     * @description The region ID.
     *
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
