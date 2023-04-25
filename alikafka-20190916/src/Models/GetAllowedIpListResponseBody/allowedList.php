<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetAllowedIpListResponseBody;

use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetAllowedIpListResponseBody\allowedList\internetList;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetAllowedIpListResponseBody\allowedList\vpcList;
use AlibabaCloud\Tea\Model;

class allowedList extends Model
{
    /**
     * @description The deployment mode of the instance. Valid values:
     *
     *   **4**: allows access from the Internet and a virtual private cloud (VPC).
     *   **5**: allows access from a VPC.
     *
     * >  Only integrators need to concern themselves with the value of this parameter.
     * @example 4
     *
     * @var int
     */
    public $deployType;

    /**
     * @description The whitelist for access from the Internet.
     *
     * @var internetList[]
     */
    public $internetList;

    /**
     * @description The whitelist for access from a VPC.
     *
     * @var vpcList[]
     */
    public $vpcList;
    protected $_name = [
        'deployType'   => 'DeployType',
        'internetList' => 'InternetList',
        'vpcList'      => 'VpcList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deployType) {
            $res['DeployType'] = $this->deployType;
        }
        if (null !== $this->internetList) {
            $res['InternetList'] = [];
            if (null !== $this->internetList && \is_array($this->internetList)) {
                $n = 0;
                foreach ($this->internetList as $item) {
                    $res['InternetList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vpcList) {
            $res['VpcList'] = [];
            if (null !== $this->vpcList && \is_array($this->vpcList)) {
                $n = 0;
                foreach ($this->vpcList as $item) {
                    $res['VpcList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return allowedList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeployType'])) {
            $model->deployType = $map['DeployType'];
        }
        if (isset($map['InternetList'])) {
            if (!empty($map['InternetList'])) {
                $model->internetList = [];
                $n                   = 0;
                foreach ($map['InternetList'] as $item) {
                    $model->internetList[$n++] = null !== $item ? internetList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VpcList'])) {
            if (!empty($map['VpcList'])) {
                $model->vpcList = [];
                $n              = 0;
                foreach ($map['VpcList'] as $item) {
                    $model->vpcList[$n++] = null !== $item ? vpcList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
