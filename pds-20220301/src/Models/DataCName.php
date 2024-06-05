<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class DataCName extends Model
{
    /**
     * @var int
     */
    public $certExpireTime;

    /**
     * @var string
     */
    public $certName;

    /**
     * @var string
     */
    public $cname;

    /**
     * @var string
     */
    public $cnameType;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $storeId;
    protected $_name = [
        'certExpireTime' => 'cert_expire_time',
        'certName'       => 'cert_name',
        'cname'          => 'cname',
        'cnameType'      => 'cname_type',
        'location'       => 'location',
        'storeId'        => 'store_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certExpireTime) {
            $res['cert_expire_time'] = $this->certExpireTime;
        }
        if (null !== $this->certName) {
            $res['cert_name'] = $this->certName;
        }
        if (null !== $this->cname) {
            $res['cname'] = $this->cname;
        }
        if (null !== $this->cnameType) {
            $res['cname_type'] = $this->cnameType;
        }
        if (null !== $this->location) {
            $res['location'] = $this->location;
        }
        if (null !== $this->storeId) {
            $res['store_id'] = $this->storeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DataCName
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cert_expire_time'])) {
            $model->certExpireTime = $map['cert_expire_time'];
        }
        if (isset($map['cert_name'])) {
            $model->certName = $map['cert_name'];
        }
        if (isset($map['cname'])) {
            $model->cname = $map['cname'];
        }
        if (isset($map['cname_type'])) {
            $model->cnameType = $map['cname_type'];
        }
        if (isset($map['location'])) {
            $model->location = $map['location'];
        }
        if (isset($map['store_id'])) {
            $model->storeId = $map['store_id'];
        }

        return $model;
    }
}
