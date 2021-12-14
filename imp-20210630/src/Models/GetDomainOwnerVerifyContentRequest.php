<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class GetDomainOwnerVerifyContentRequest extends Model
{
    /**
     * @description 直播域名
     *
     * @var string
     */
    public $liveDomainName;

    /**
     * @description 地域
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'liveDomainName' => 'LiveDomainName',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveDomainName) {
            $res['LiveDomainName'] = $this->liveDomainName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDomainOwnerVerifyContentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveDomainName'])) {
            $model->liveDomainName = $map['LiveDomainName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
