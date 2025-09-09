<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCustomLinesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCustomLinesResponseBody\customLines\ipSegmentList;

class customLines extends Model
{
    /**
     * @var string
     */
    public $code;

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
    protected $_name = [
        'code' => 'Code',
        'id' => 'Id',
        'ipSegmentList' => 'IpSegmentList',
        'name' => 'Name',
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

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->ipSegmentList) {
            if (\is_array($this->ipSegmentList)) {
                $res['IpSegmentList'] = [];
                $n1 = 0;
                foreach ($this->ipSegmentList as $item1) {
                    $res['IpSegmentList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IpSegmentList'])) {
            if (!empty($map['IpSegmentList'])) {
                $model->ipSegmentList = [];
                $n1 = 0;
                foreach ($map['IpSegmentList'] as $item1) {
                    $model->ipSegmentList[$n1] = ipSegmentList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
