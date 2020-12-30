<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeConfigTemplatesResponseBody;

use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeConfigTemplatesResponseBody\configTemplates\configTemplate;
use AlibabaCloud\Tea\Model;

class configTemplates extends Model
{
    /**
     * @var configTemplate[]
     */
    public $configTemplate;
    protected $_name = [
        'configTemplate' => 'ConfigTemplate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configTemplate) {
            $res['ConfigTemplate'] = [];
            if (null !== $this->configTemplate && \is_array($this->configTemplate)) {
                $n = 0;
                foreach ($this->configTemplate as $item) {
                    $res['ConfigTemplate'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configTemplates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigTemplate'])) {
            if (!empty($map['ConfigTemplate'])) {
                $model->configTemplate = [];
                $n                     = 0;
                foreach ($map['ConfigTemplate'] as $item) {
                    $model->configTemplate[$n++] = null !== $item ? configTemplate::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
