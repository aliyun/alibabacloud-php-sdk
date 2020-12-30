<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribePublicConfigTemplatesResponseBody;

use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribePublicConfigTemplatesResponseBody\publicConfigTemplates\publicConfigTemplate;
use AlibabaCloud\Tea\Model;

class publicConfigTemplates extends Model
{
    /**
     * @var publicConfigTemplate[]
     */
    public $publicConfigTemplate;
    protected $_name = [
        'publicConfigTemplate' => 'PublicConfigTemplate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->publicConfigTemplate) {
            $res['PublicConfigTemplate'] = [];
            if (null !== $this->publicConfigTemplate && \is_array($this->publicConfigTemplate)) {
                $n = 0;
                foreach ($this->publicConfigTemplate as $item) {
                    $res['PublicConfigTemplate'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return publicConfigTemplates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PublicConfigTemplate'])) {
            if (!empty($map['PublicConfigTemplate'])) {
                $model->publicConfigTemplate = [];
                $n                           = 0;
                foreach ($map['PublicConfigTemplate'] as $item) {
                    $model->publicConfigTemplate[$n++] = null !== $item ? publicConfigTemplate::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
