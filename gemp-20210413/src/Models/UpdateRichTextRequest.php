<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class UpdateRichTextRequest extends Model
{
    /**
     * @example 123123
     *
     * @var int
     */
    public $instanceId;

    /**
     * @example INCIDENT 事件 ALERT告警 PROBLEM故障
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example 这是一个富文本
     *
     * @var string
     */
    public $richText;

    /**
     * @example 123112313
     *
     * @var int
     */
    public $richTextId;
    protected $_name = [
        'instanceId'   => 'instanceId',
        'instanceType' => 'instanceType',
        'richText'     => 'richText',
        'richTextId'   => 'richTextId',
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
        if (null !== $this->richTextId) {
            $res['richTextId'] = $this->richTextId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateRichTextRequest
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
        if (isset($map['richTextId'])) {
            $model->richTextId = $map['richTextId'];
        }

        return $model;
    }
}
