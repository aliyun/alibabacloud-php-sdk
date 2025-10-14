<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListDataIngestionsResponseBody\dataIngestions;

class ListDataIngestionsResponseBody extends Model
{
    /**
     * @var dataIngestions[]
     */
    public $dataIngestions;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataIngestions' => 'DataIngestions',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->dataIngestions)) {
            Model::validateArray($this->dataIngestions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataIngestions) {
            if (\is_array($this->dataIngestions)) {
                $res['DataIngestions'] = [];
                $n1 = 0;
                foreach ($this->dataIngestions as $item1) {
                    $res['DataIngestions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['DataIngestions'])) {
            if (!empty($map['DataIngestions'])) {
                $model->dataIngestions = [];
                $n1 = 0;
                foreach ($map['DataIngestions'] as $item1) {
                    $model->dataIngestions[$n1] = dataIngestions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
