<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetAllowedIpListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetAllowedIpListResponseBody\allowedList\internetList;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetAllowedIpListResponseBody\allowedList\vpcList;

class allowedList extends Model
{
    /**
     * @var int
     */
    public $deployType;

    /**
     * @var internetList[]
     */
    public $internetList;

    /**
     * @var vpcList[]
     */
    public $vpcList;
    protected $_name = [
        'deployType' => 'DeployType',
        'internetList' => 'InternetList',
        'vpcList' => 'VpcList',
    ];

    public function validate()
    {
        if (\is_array($this->internetList)) {
            Model::validateArray($this->internetList);
        }
        if (\is_array($this->vpcList)) {
            Model::validateArray($this->vpcList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deployType) {
            $res['DeployType'] = $this->deployType;
        }

        if (null !== $this->internetList) {
            if (\is_array($this->internetList)) {
                $res['InternetList'] = [];
                $n1 = 0;
                foreach ($this->internetList as $item1) {
                    $res['InternetList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->vpcList) {
            if (\is_array($this->vpcList)) {
                $res['VpcList'] = [];
                $n1 = 0;
                foreach ($this->vpcList as $item1) {
                    $res['VpcList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeployType'])) {
            $model->deployType = $map['DeployType'];
        }

        if (isset($map['InternetList'])) {
            if (!empty($map['InternetList'])) {
                $model->internetList = [];
                $n1 = 0;
                foreach ($map['InternetList'] as $item1) {
                    $model->internetList[$n1++] = internetList::fromMap($item1);
                }
            }
        }

        if (isset($map['VpcList'])) {
            if (!empty($map['VpcList'])) {
                $model->vpcList = [];
                $n1 = 0;
                foreach ($map['VpcList'] as $item1) {
                    $model->vpcList[$n1++] = vpcList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
