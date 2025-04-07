<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UntagCloudResourcesResponseBody\failedResources;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @description The tag key.
     *
     * @example Resolution
     *
     * @var string
     */
    public $key;

    /**
     * @description The tag type.
     *
     * Valid values:
     *
     *   Custom: custom tag.
     *   System: system tag.
     *
     * @example Custom
     *
     * @var string
     */
    public $scope;
    protected $_name = [
        'key' => 'Key',
        'scope' => 'Scope',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tags
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        return $model;
    }
}
