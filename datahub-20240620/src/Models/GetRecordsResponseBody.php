<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Datahub\V20240620\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Datahub\V20240620\Models\GetRecordsResponseBody\records;

class GetRecordsResponseBody extends Model
{
    /**
     * @var records[]
     */
    public $records;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'records' => 'Records',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->records)) {
            Model::validateArray($this->records);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->records) {
            if (\is_array($this->records)) {
                $res['Records'] = [];
                $n1 = 0;
                foreach ($this->records as $item1) {
                    $res['Records'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['Records'])) {
            if (!empty($map['Records'])) {
                $model->records = [];
                $n1 = 0;
                foreach ($map['Records'] as $item1) {
                    $model->records[$n1] = records::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
