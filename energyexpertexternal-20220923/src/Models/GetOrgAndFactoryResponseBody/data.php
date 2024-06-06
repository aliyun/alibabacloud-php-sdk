<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetOrgAndFactoryResponseBody;

use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetOrgAndFactoryResponseBody\data\factoryList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The Alibaba Cloud account ID.
     *
     * @example 1319617584664960
     *
     * @var string
     */
    public $aliyunPk;

    /**
     * @description The sites.
     *
     * @var factoryList[]
     */
    public $factoryList;

    /**
     * @description The enterprise ID.
     *
     * @example 6265f42XXXX2fec150
     *
     * @var string
     */
    public $organizationId;

    /**
     * @description The enterprise name.
     *
     * @example Ledi Industrial Park
     *
     * @var string
     */
    public $organizationName;
    protected $_name = [
        'aliyunPk'         => 'aliyunPk',
        'factoryList'      => 'factoryList',
        'organizationId'   => 'organizationId',
        'organizationName' => 'organizationName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunPk) {
            $res['aliyunPk'] = $this->aliyunPk;
        }
        if (null !== $this->factoryList) {
            $res['factoryList'] = [];
            if (null !== $this->factoryList && \is_array($this->factoryList)) {
                $n = 0;
                foreach ($this->factoryList as $item) {
                    $res['factoryList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }
        if (null !== $this->organizationName) {
            $res['organizationName'] = $this->organizationName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['aliyunPk'])) {
            $model->aliyunPk = $map['aliyunPk'];
        }
        if (isset($map['factoryList'])) {
            if (!empty($map['factoryList'])) {
                $model->factoryList = [];
                $n                  = 0;
                foreach ($map['factoryList'] as $item) {
                    $model->factoryList[$n++] = null !== $item ? factoryList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }
        if (isset($map['organizationName'])) {
            $model->organizationName = $map['organizationName'];
        }

        return $model;
    }
}
