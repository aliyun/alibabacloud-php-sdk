<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\QuerySelectOptionsResponseBody\selectOptions;

class QuerySelectOptionsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var selectOptions[]
     */
    public $selectOptions;
    protected $_name = [
        'requestId' => 'RequestId',
        'selectOptions' => 'SelectOptions',
    ];

    public function validate()
    {
        if (\is_array($this->selectOptions)) {
            Model::validateArray($this->selectOptions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->selectOptions) {
            if (\is_array($this->selectOptions)) {
                $res['SelectOptions'] = [];
                $n1 = 0;
                foreach ($this->selectOptions as $item1) {
                    $res['SelectOptions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['SelectOptions'])) {
            if (!empty($map['SelectOptions'])) {
                $model->selectOptions = [];
                $n1 = 0;
                foreach ($map['SelectOptions'] as $item1) {
                    $model->selectOptions[$n1] = selectOptions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
