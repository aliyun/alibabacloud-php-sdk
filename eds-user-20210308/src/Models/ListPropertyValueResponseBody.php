<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\SDK\Edsuser\V20210308\Models\ListPropertyValueResponseBody\propertyValueInfos;
use AlibabaCloud\Tea\Model;

class ListPropertyValueResponseBody extends Model
{
    /**
     * @description Details about property values.
     *
     * @var propertyValueInfos[]
     */
    public $propertyValueInfos;

    /**
     * @description The ID of the request.
     *
     * @example C52013A5-3422-5D1F-B22C-A57110972AD9
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'propertyValueInfos' => 'PropertyValueInfos',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->propertyValueInfos) {
            $res['PropertyValueInfos'] = [];
            if (null !== $this->propertyValueInfos && \is_array($this->propertyValueInfos)) {
                $n = 0;
                foreach ($this->propertyValueInfos as $item) {
                    $res['PropertyValueInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPropertyValueResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PropertyValueInfos'])) {
            if (!empty($map['PropertyValueInfos'])) {
                $model->propertyValueInfos = [];
                $n                         = 0;
                foreach ($map['PropertyValueInfos'] as $item) {
                    $model->propertyValueInfos[$n++] = null !== $item ? propertyValueInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
