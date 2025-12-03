<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20210114\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenDataMapResponseBody\sasScreenTypeList;

class DescribeScreenDataMapResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var sasScreenTypeList[]
     */
    public $sasScreenTypeList;
    protected $_name = [
        'requestId' => 'RequestId',
        'sasScreenTypeList' => 'SasScreenTypeList',
    ];

    public function validate()
    {
        if (\is_array($this->sasScreenTypeList)) {
            Model::validateArray($this->sasScreenTypeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sasScreenTypeList) {
            if (\is_array($this->sasScreenTypeList)) {
                $res['SasScreenTypeList'] = [];
                $n1 = 0;
                foreach ($this->sasScreenTypeList as $item1) {
                    $res['SasScreenTypeList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SasScreenTypeList'])) {
            if (!empty($map['SasScreenTypeList'])) {
                $model->sasScreenTypeList = [];
                $n1 = 0;
                foreach ($map['SasScreenTypeList'] as $item1) {
                    $model->sasScreenTypeList[$n1] = sasScreenTypeList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
