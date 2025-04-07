<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\TagCloudResourcesResponseBody\failedResources;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @example System/Scheduler/STOP_NEW_USER_CONNECTION
     *
     * @var string
     */
    public $key;

    /**
     * @example System
     *
     * @var string
     */
    public $scope;

    /**
     * @example true
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key' => 'Key',
        'scope' => 'Scope',
        'value' => 'Value',
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
        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
