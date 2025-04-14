<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebInstanceRelationsResponseBody\webInstanceRelations;

class DescribeWebInstanceRelationsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var webInstanceRelations[]
     */
    public $webInstanceRelations;
    protected $_name = [
        'requestId' => 'RequestId',
        'webInstanceRelations' => 'WebInstanceRelations',
    ];

    public function validate()
    {
        if (\is_array($this->webInstanceRelations)) {
            Model::validateArray($this->webInstanceRelations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->webInstanceRelations) {
            if (\is_array($this->webInstanceRelations)) {
                $res['WebInstanceRelations'] = [];
                $n1 = 0;
                foreach ($this->webInstanceRelations as $item1) {
                    $res['WebInstanceRelations'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['WebInstanceRelations'])) {
            if (!empty($map['WebInstanceRelations'])) {
                $model->webInstanceRelations = [];
                $n1 = 0;
                foreach ($map['WebInstanceRelations'] as $item1) {
                    $model->webInstanceRelations[$n1++] = webInstanceRelations::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
