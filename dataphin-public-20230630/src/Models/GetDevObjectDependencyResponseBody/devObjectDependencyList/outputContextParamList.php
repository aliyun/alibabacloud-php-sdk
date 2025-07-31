<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDevObjectDependencyResponseBody\devObjectDependencyList;

use AlibabaCloud\Tea\Model;

class outputContextParamList extends Model
{
    /**
     * @example v1
     *
     * @var string
     */
    public $defaultValue;

    /**
     * @example xxtest
     *
     * @var string
     */
    public $description;

    /**
     * @example v1
     *
     * @var string
     */
    public $key;
    protected $_name = [
        'defaultValue' => 'DefaultValue',
        'description' => 'Description',
        'key' => 'Key',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return outputContextParamList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        return $model;
    }
}
