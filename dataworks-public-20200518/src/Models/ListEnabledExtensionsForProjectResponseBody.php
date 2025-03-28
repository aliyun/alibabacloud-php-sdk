<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListEnabledExtensionsForProjectResponseBody\extensions;

class ListEnabledExtensionsForProjectResponseBody extends Model
{
    /**
     * @var extensions[]
     */
    public $extensions;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'extensions' => 'Extensions',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->extensions)) {
            Model::validateArray($this->extensions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extensions) {
            if (\is_array($this->extensions)) {
                $res['Extensions'] = [];
                $n1 = 0;
                foreach ($this->extensions as $item1) {
                    $res['Extensions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Extensions'])) {
            if (!empty($map['Extensions'])) {
                $model->extensions = [];
                $n1 = 0;
                foreach ($map['Extensions'] as $item1) {
                    $model->extensions[$n1++] = extensions::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
