<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\GetVccResponseBody\content;

use AlibabaCloud\Tea\Model;

class vpdBaseInfo extends Model
{
    /**
     * @description Network address segment
     *
     * @example 172.18.0.0/24
     *
     * @var string
     */
    public $cidr;

    /**
     * @description The time when the data address was created.
     *
     * @example 1678379917000
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Lingjun CIDR block instance ID
     *
     * @example vpd-ppdunxzc
     *
     * @var string
     */
    public $vpdId;

    /**
     * @description Lingjun CIDR block instance name
     *
     * @example yzp-rg-test3
     *
     * @var string
     */
    public $vpdName;
    protected $_name = [
        'cidr'       => 'Cidr',
        'createTime' => 'CreateTime',
        'vpdId'      => 'VpdId',
        'vpdName'    => 'VpdName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cidr) {
            $res['Cidr'] = $this->cidr;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->vpdId) {
            $res['VpdId'] = $this->vpdId;
        }
        if (null !== $this->vpdName) {
            $res['VpdName'] = $this->vpdName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpdBaseInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cidr'])) {
            $model->cidr = $map['Cidr'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['VpdId'])) {
            $model->vpdId = $map['VpdId'];
        }
        if (isset($map['VpdName'])) {
            $model->vpdName = $map['VpdName'];
        }

        return $model;
    }
}
