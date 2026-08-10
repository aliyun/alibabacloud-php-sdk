<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Dara\Model;

class QueryLabelConfigResponseBody extends Model
{
    /**
     * @var mixed[]
     */
    public $contentModeration;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'contentModeration' => 'ContentModeration',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->contentModeration)) {
            Model::validateArray($this->contentModeration);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contentModeration) {
            if (\is_array($this->contentModeration)) {
                $res['ContentModeration'] = [];
                $n1 = 0;
                foreach ($this->contentModeration as $item1) {
                    $res['ContentModeration'][$n1] = $item1;
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
        if (isset($map['ContentModeration'])) {
            if (!empty($map['ContentModeration'])) {
                $model->contentModeration = [];
                $n1 = 0;
                foreach ($map['ContentModeration'] as $item1) {
                    $model->contentModeration[$n1] = $item1;
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
