<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceDiagnosisResponseBody\diagnosisList;

class DescribeServiceDiagnosisResponseBody extends Model
{
    /**
     * @var diagnosisList[]
     */
    public $diagnosisList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'diagnosisList' => 'DiagnosisList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->diagnosisList)) {
            Model::validateArray($this->diagnosisList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->diagnosisList) {
            if (\is_array($this->diagnosisList)) {
                $res['DiagnosisList'] = [];
                $n1 = 0;
                foreach ($this->diagnosisList as $item1) {
                    $res['DiagnosisList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['DiagnosisList'])) {
            if (!empty($map['DiagnosisList'])) {
                $model->diagnosisList = [];
                $n1 = 0;
                foreach ($map['DiagnosisList'] as $item1) {
                    $model->diagnosisList[$n1++] = diagnosisList::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
