<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSimilarEventScenariosResponseBody\scenarios;

class DescribeSimilarEventScenariosResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var scenarios[]
     */
    public $scenarios;
    protected $_name = [
        'requestId' => 'RequestId',
        'scenarios' => 'Scenarios',
    ];

    public function validate()
    {
        if (\is_array($this->scenarios)) {
            Model::validateArray($this->scenarios);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->scenarios) {
            if (\is_array($this->scenarios)) {
                $res['Scenarios'] = [];
                $n1               = 0;
                foreach ($this->scenarios as $item1) {
                    $res['Scenarios'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['Scenarios'])) {
            if (!empty($map['Scenarios'])) {
                $model->scenarios = [];
                $n1               = 0;
                foreach ($map['Scenarios'] as $item1) {
                    $model->scenarios[$n1++] = scenarios::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
