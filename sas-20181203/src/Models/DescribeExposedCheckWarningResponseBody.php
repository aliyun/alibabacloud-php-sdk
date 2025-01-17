<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedCheckWarningResponseBody\warningList;

class DescribeExposedCheckWarningResponseBody extends Model
{
    /**
     * @var int
     */
    public $count;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var warningList[]
     */
    public $warningList;
    protected $_name = [
        'count'       => 'Count',
        'requestId'   => 'RequestId',
        'warningList' => 'WarningList',
    ];

    public function validate()
    {
        if (\is_array($this->warningList)) {
            Model::validateArray($this->warningList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->warningList) {
            if (\is_array($this->warningList)) {
                $res['WarningList'] = [];
                $n1                 = 0;
                foreach ($this->warningList as $item1) {
                    $res['WarningList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['WarningList'])) {
            if (!empty($map['WarningList'])) {
                $model->warningList = [];
                $n1                 = 0;
                foreach ($map['WarningList'] as $item1) {
                    $model->warningList[$n1++] = warningList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
