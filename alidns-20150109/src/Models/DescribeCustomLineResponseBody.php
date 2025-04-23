<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCustomLineResponseBody\ipSegmentList;

class DescribeCustomLineResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var int
     */
    public $id;

    /**
     * @var ipSegmentList[]
     */
    public $ipSegmentList;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code' => 'Code',
        'domainName' => 'DomainName',
        'id' => 'Id',
        'ipSegmentList' => 'IpSegmentList',
        'name' => 'Name',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->ipSegmentList)) {
            Model::validateArray($this->ipSegmentList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->ipSegmentList) {
            if (\is_array($this->ipSegmentList)) {
                $res['IpSegmentList'] = [];
                $n1 = 0;
                foreach ($this->ipSegmentList as $item1) {
                    $res['IpSegmentList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IpSegmentList'])) {
            if (!empty($map['IpSegmentList'])) {
                $model->ipSegmentList = [];
                $n1 = 0;
                foreach ($map['IpSegmentList'] as $item1) {
                    $model->ipSegmentList[$n1++] = ipSegmentList::fromMap($item1);
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
