<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\CreateRichTextResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 资源id
     *
     * @var int
     */
    public $instanceId;

    /**
     * @description 资源类型
     *
     * @var int
     */
    public $instanceType;

    /**
     * @description 富文本内容
     *
     * @var string
     */
    public $richText;
    protected $_name = [
        'instanceId'   => 'instanceId',
        'instanceType' => 'instanceType',
        'richText'     => 'richText',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['instanceType'] = $this->instanceType;
        }
        if (null !== $this->richText) {
            $res['richText'] = $this->richText;
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
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['instanceType'])) {
            $model->instanceType = $map['instanceType'];
        }
        if (isset($map['richText'])) {
            $model->richText = $map['richText'];
        }

        return $model;
    }
}
