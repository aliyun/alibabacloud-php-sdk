<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateImagePipelineRequest\imageOptions;

use AlibabaCloud\Tea\Model;

class imageTags extends Model
{
    /**
     * @description 标签键。N 的取值范围：1~20。一旦传入该值，则不允许为空字符串。最多支持 128 个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。
     *
     * @example TestKey
     *
     * @var string
     */
    public $key;

    /**
     * @description 资源的标签值。N 的取值范围：1~20。一旦传入该值，可以为空字符串。最多支持 128 个字符，不能以`acs:`开头，不能包含`http://`或者`https://`。
     *
     * @example TestValue
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key'   => 'Key',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageTags
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
