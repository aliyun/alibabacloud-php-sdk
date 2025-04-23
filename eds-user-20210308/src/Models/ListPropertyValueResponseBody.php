<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\ListPropertyValueResponseBody\propertyValueInfos;

class ListPropertyValueResponseBody extends Model
{
    /**
     * @var propertyValueInfos[]
     */
    public $propertyValueInfos;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'propertyValueInfos' => 'PropertyValueInfos',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->propertyValueInfos)) {
            Model::validateArray($this->propertyValueInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->propertyValueInfos) {
            if (\is_array($this->propertyValueInfos)) {
                $res['PropertyValueInfos'] = [];
                $n1 = 0;
                foreach ($this->propertyValueInfos as $item1) {
                    $res['PropertyValueInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PropertyValueInfos'])) {
            if (!empty($map['PropertyValueInfos'])) {
                $model->propertyValueInfos = [];
                $n1 = 0;
                foreach ($map['PropertyValueInfos'] as $item1) {
                    $model->propertyValueInfos[$n1++] = propertyValueInfos::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
