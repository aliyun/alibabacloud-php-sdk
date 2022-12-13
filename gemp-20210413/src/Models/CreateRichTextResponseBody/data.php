<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\CreateRichTextResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1231
     *
     * @var int
     */
    public $instanceId;

    /**
     * @example 0 事件 1告警 2 故障
     *
     * @var int
     */
    public $instanceType;

    /**
     * @example 这是一个富文本
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
