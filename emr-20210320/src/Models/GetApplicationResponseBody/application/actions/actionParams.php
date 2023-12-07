<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetApplicationResponseBody\application\actions;

use AlibabaCloud\SDK\Emr\V20210320\Models\GetApplicationResponseBody\application\actions\actionParams\valueAttribute;
use AlibabaCloud\Tea\Model;

class actionParams extends Model
{
    /**
     * @description 动作参数描述。
     *
     * @example start
     *
     * @var string
     */
    public $description;

    /**
     * @description 动作参数KEY。
     *
     * @var string
     */
    public $key;

    /**
     * @description 动作参数属性。
     *
     * @var valueAttribute
     */
    public $valueAttribute;
    protected $_name = [
        'description'    => 'Description',
        'key'            => 'Key',
        'valueAttribute' => 'ValueAttribute',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->valueAttribute) {
            $res['ValueAttribute'] = null !== $this->valueAttribute ? $this->valueAttribute->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return actionParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['ValueAttribute'])) {
            $model->valueAttribute = valueAttribute::fromMap($map['ValueAttribute']);
        }

        return $model;
    }
}
