<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class AddPrivateDnsDomainNameRequest extends Model
{
    /**
     * @var string
     */
    public $accessInstanceId;

    /**
     * @var string[]
     */
    public $domainNameList;

    /**
     * @var string
     */
    public $regionNo;
    protected $_name = [
        'accessInstanceId' => 'AccessInstanceId',
        'domainNameList' => 'DomainNameList',
        'regionNo' => 'RegionNo',
    ];

    public function validate()
    {
        if (\is_array($this->domainNameList)) {
            Model::validateArray($this->domainNameList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessInstanceId) {
            $res['AccessInstanceId'] = $this->accessInstanceId;
        }

        if (null !== $this->domainNameList) {
            if (\is_array($this->domainNameList)) {
                $res['DomainNameList'] = [];
                $n1 = 0;
                foreach ($this->domainNameList as $item1) {
                    $res['DomainNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
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
        if (isset($map['AccessInstanceId'])) {
            $model->accessInstanceId = $map['AccessInstanceId'];
        }

        if (isset($map['DomainNameList'])) {
            if (!empty($map['DomainNameList'])) {
                $model->domainNameList = [];
                $n1 = 0;
                foreach ($map['DomainNameList'] as $item1) {
                    $model->domainNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }

        return $model;
    }
}
