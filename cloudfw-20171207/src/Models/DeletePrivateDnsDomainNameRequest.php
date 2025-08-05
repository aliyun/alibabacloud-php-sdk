<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DeletePrivateDnsDomainNameRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example pd-12345
     *
     * @var string
     */
    public $accessInstanceId;

    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $domainNameList;

    /**
     * @description This parameter is required.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionNo;
    protected $_name = [
        'accessInstanceId' => 'AccessInstanceId',
        'domainNameList' => 'DomainNameList',
        'regionNo' => 'RegionNo',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessInstanceId) {
            $res['AccessInstanceId'] = $this->accessInstanceId;
        }
        if (null !== $this->domainNameList) {
            $res['DomainNameList'] = $this->domainNameList;
        }
        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeletePrivateDnsDomainNameRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessInstanceId'])) {
            $model->accessInstanceId = $map['AccessInstanceId'];
        }
        if (isset($map['DomainNameList'])) {
            if (!empty($map['DomainNameList'])) {
                $model->domainNameList = $map['DomainNameList'];
            }
        }
        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }

        return $model;
    }
}
