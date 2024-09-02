<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateFunctionResourceRequest;

use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateFunctionResourceRequest\data\generators;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The content of the file that corresponds to a resource of the raw_file type.
     *
     * @example abc
     *
     * @var string
     */
    public $content;

    /**
     * @description The feature generators that correspond to resources of the feature_generator type.
     *
     * @var generators[]
     */
    public $generators;
    protected $_name = [
        'content'    => 'Content',
        'generators' => 'Generators',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->generators) {
            $res['Generators'] = [];
            if (null !== $this->generators && \is_array($this->generators)) {
                $n = 0;
                foreach ($this->generators as $item) {
                    $res['Generators'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Generators'])) {
            if (!empty($map['Generators'])) {
                $model->generators = [];
                $n                 = 0;
                foreach ($map['Generators'] as $item) {
                    $model->generators[$n++] = null !== $item ? generators::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
