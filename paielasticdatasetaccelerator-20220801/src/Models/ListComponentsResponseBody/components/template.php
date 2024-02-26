<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\ListComponentsResponseBody\components;

use AlibabaCloud\Tea\Model;

class template extends Model
{
    /**
     * @example OSS
     *
     * @var string
     */
    public $type;

    /**
     * @example data/VOCdevkit/VOC2007/ImageSets/Main/val.txt
     *
     * @var string
     */
    public $uri;
    protected $_name = [
        'type' => 'Type',
        'uri'  => 'Uri',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return template
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }

        return $model;
    }
}
