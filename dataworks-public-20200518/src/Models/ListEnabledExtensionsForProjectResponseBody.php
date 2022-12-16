<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListEnabledExtensionsForProjectResponseBody\extensions;
use AlibabaCloud\Tea\Model;

class ListEnabledExtensionsForProjectResponseBody extends Model
{
    /**
     * @var extensions[]
     */
    public $extensions;

    /**
     * @example 4F2CA7ED-27E5-59EA-A8C4-F1F7A1FF0B22
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'extensions' => 'Extensions',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extensions) {
            $res['Extensions'] = [];
            if (null !== $this->extensions && \is_array($this->extensions)) {
                $n = 0;
                foreach ($this->extensions as $item) {
                    $res['Extensions'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListEnabledExtensionsForProjectResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Extensions'])) {
            if (!empty($map['Extensions'])) {
                $model->extensions = [];
                $n                 = 0;
                foreach ($map['Extensions'] as $item) {
                    $model->extensions[$n++] = null !== $item ? extensions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
