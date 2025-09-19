<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckFixDetailsResponseBody\checkFixDetails;

class DescribeCheckFixDetailsResponseBody extends Model
{
    /**
     * @var checkFixDetails[]
     */
    public $checkFixDetails;

    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'checkFixDetails' => 'CheckFixDetails',
        'count' => 'Count',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->checkFixDetails)) {
            Model::validateArray($this->checkFixDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkFixDetails) {
            if (\is_array($this->checkFixDetails)) {
                $res['CheckFixDetails'] = [];
                $n1 = 0;
                foreach ($this->checkFixDetails as $item1) {
                    $res['CheckFixDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->count) {
            $res['Count'] = $this->count;
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
        if (isset($map['CheckFixDetails'])) {
            if (!empty($map['CheckFixDetails'])) {
                $model->checkFixDetails = [];
                $n1 = 0;
                foreach ($map['CheckFixDetails'] as $item1) {
                    $model->checkFixDetails[$n1] = checkFixDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
