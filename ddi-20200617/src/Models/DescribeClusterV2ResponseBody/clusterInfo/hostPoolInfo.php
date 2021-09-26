<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterV2ResponseBody\clusterInfo;

use AlibabaCloud\Tea\Model;

class hostPoolInfo extends Model
{
    /**
     * @var string
     */
    public $hpName;

    /**
     * @var string
     */
    public $hpBizId;
    protected $_name = [
        'hpName'  => 'HpName',
        'hpBizId' => 'HpBizId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hpName) {
            $res['HpName'] = $this->hpName;
        }
        if (null !== $this->hpBizId) {
            $res['HpBizId'] = $this->hpBizId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hostPoolInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HpName'])) {
            $model->hpName = $map['HpName'];
        }
        if (isset($map['HpBizId'])) {
            $model->hpBizId = $map['HpBizId'];
        }

        return $model;
    }
}
