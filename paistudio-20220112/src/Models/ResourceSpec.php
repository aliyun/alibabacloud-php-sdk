<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class ResourceSpec extends Model
{
    /**
     * @var NodeSpec[]
     */
    public $nodeSpecs;
    protected $_name = [
        'nodeSpecs' => 'NodeSpecs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeSpecs) {
            $res['NodeSpecs'] = [];
            if (null !== $this->nodeSpecs && \is_array($this->nodeSpecs)) {
                $n = 0;
                foreach ($this->nodeSpecs as $item) {
                    $res['NodeSpecs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResourceSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeSpecs'])) {
            if (!empty($map['NodeSpecs'])) {
                $model->nodeSpecs = [];
                $n                = 0;
                foreach ($map['NodeSpecs'] as $item) {
                    $model->nodeSpecs[$n++] = null !== $item ? NodeSpec::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
