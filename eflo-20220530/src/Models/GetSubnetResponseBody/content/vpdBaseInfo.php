<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\GetSubnetResponseBody\content;

use AlibabaCloud\Tea\Model;

class vpdBaseInfo extends Model
{
    /**
     * @example 10.0.0.0/8
     *
     * @var string
     */
    public $cidr;

    /**
     * @example 2022-04-11 15:19:58
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example vpd-test
     *
     * @var string
     */
    public $name;

    /**
     * @example vpd-iv2zm1qf
     *
     * @var string
     */
    public $vpdId;
    protected $_name = [
        'cidr'      => 'Cidr',
        'gmtCreate' => 'GmtCreate',
        'name'      => 'Name',
        'vpdId'     => 'VpdId',
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
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->vpdId) {
            $res['VpdId'] = $this->vpdId;
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
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['VpdId'])) {
            $model->vpdId = $map['VpdId'];
        }

        return $model;
    }
}
