<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241121\Models;

use AlibabaCloud\Dara\Model;

class ListApiNamesResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $apiNames;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'apiNames' => 'apiNames',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->apiNames)) {
            Model::validateArray($this->apiNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiNames) {
            if (\is_array($this->apiNames)) {
                $res['apiNames'] = [];
                $n1 = 0;
                foreach ($this->apiNames as $item1) {
                    $res['apiNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['apiNames'])) {
            if (!empty($map['apiNames'])) {
                $model->apiNames = [];
                $n1 = 0;
                foreach ($map['apiNames'] as $item1) {
                    $model->apiNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
