<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oosops\V20190601\Models;

use AlibabaCloud\Tea\Model;

class SetQuotaRequest extends Model
{
    /**
     * @var string
     */
    public $quotaName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $uid;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'quotaName' => 'QuotaName',
        'regionId'  => 'RegionId',
        'uid'       => 'Uid',
        'value'     => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->quotaName) {
            $res['QuotaName'] = $this->quotaName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetQuotaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QuotaName'])) {
            $model->quotaName = $map['QuotaName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
