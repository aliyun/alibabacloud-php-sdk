<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetOrgAndFactoryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetOrgAndFactoryResponseBody\data\factoryList;

class data extends Model
{
    /**
     * @var string
     */
    public $aliyunPk;
    /**
     * @var factoryList[]
     */
    public $factoryList;
    /**
     * @var string
     */
    public $organizationId;
    /**
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
        if (\is_array($this->factoryList)) {
            Model::validateArray($this->factoryList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunPk) {
            $res['aliyunPk'] = $this->aliyunPk;
        }

        if (null !== $this->factoryList) {
            if (\is_array($this->factoryList)) {
                $res['factoryList'] = [];
                $n1                 = 0;
                foreach ($this->factoryList as $item1) {
                    $res['factoryList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['aliyunPk'])) {
            $model->aliyunPk = $map['aliyunPk'];
        }

        if (isset($map['factoryList'])) {
            if (!empty($map['factoryList'])) {
                $model->factoryList = [];
                $n1                 = 0;
                foreach ($map['factoryList'] as $item1) {
                    $model->factoryList[$n1++] = factoryList::fromMap($item1);
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
