<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetFunctionVersionResponseBody\result\versionConfig;

use AlibabaCloud\Tea\Model;

class usageParameters extends Model
{
    /**
     * @description The name of the instance.
     *
     * @example ""
     *
     * @var string
     */
    public $name;

    /**
     * @description Indicates whether the parameter is required.
     *
     * @example ""
     *
     * @var string
     */
    public $required;
    protected $_name = [
        'name'     => 'Name',
        'required' => 'Required',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->required) {
            $res['Required'] = $this->required;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return usageParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Required'])) {
            $model->required = $map['Required'];
        }

        return $model;
    }
}
