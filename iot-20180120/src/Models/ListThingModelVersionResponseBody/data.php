<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListThingModelVersionResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\ListThingModelVersionResponseBody\data\modelVersions;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The list of TSL model versions. The versions are displayed in descending order based on the release time. The first version is the current version.
     *
     * @var modelVersions[]
     */
    public $modelVersions;
    protected $_name = [
        'modelVersions' => 'ModelVersions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modelVersions) {
            $res['ModelVersions'] = [];
            if (null !== $this->modelVersions && \is_array($this->modelVersions)) {
                $n = 0;
                foreach ($this->modelVersions as $item) {
                    $res['ModelVersions'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['ModelVersions'])) {
            if (!empty($map['ModelVersions'])) {
                $model->modelVersions = [];
                $n                    = 0;
                foreach ($map['ModelVersions'] as $item) {
                    $model->modelVersions[$n++] = null !== $item ? modelVersions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
