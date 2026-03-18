<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeInnerIpWhitelistGroupsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $cidrIpList;

    /**
     * @var string
     */
    public $innerIpWhitelistGroupId;
    protected $_name = [
        'cidrIpList' => 'CidrIpList',
        'innerIpWhitelistGroupId' => 'InnerIpWhitelistGroupId',
    ];

    public function validate()
    {
        if (\is_array($this->cidrIpList)) {
            Model::validateArray($this->cidrIpList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cidrIpList) {
            if (\is_array($this->cidrIpList)) {
                $res['CidrIpList'] = [];
                $n1 = 0;
                foreach ($this->cidrIpList as $item1) {
                    $res['CidrIpList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->innerIpWhitelistGroupId) {
            $res['InnerIpWhitelistGroupId'] = $this->innerIpWhitelistGroupId;
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
        if (isset($map['CidrIpList'])) {
            if (!empty($map['CidrIpList'])) {
                $model->cidrIpList = [];
                $n1 = 0;
                foreach ($map['CidrIpList'] as $item1) {
                    $model->cidrIpList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InnerIpWhitelistGroupId'])) {
            $model->innerIpWhitelistGroupId = $map['InnerIpWhitelistGroupId'];
        }

        return $model;
    }
}
