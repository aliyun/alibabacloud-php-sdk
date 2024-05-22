<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\CreateAppStreamingOutTemplateRequest;

use AlibabaCloud\Tea\Model;

class streamingOutTemplate extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $layoutIds;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $mediaEncode;

    /**
     * @description This parameter is required.
     *
     * @example 模版
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'layoutIds'   => 'LayoutIds',
        'mediaEncode' => 'MediaEncode',
        'name'        => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->layoutIds) {
            $res['LayoutIds'] = $this->layoutIds;
        }
        if (null !== $this->mediaEncode) {
            $res['MediaEncode'] = $this->mediaEncode;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return streamingOutTemplate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LayoutIds'])) {
            if (!empty($map['LayoutIds'])) {
                $model->layoutIds = $map['LayoutIds'];
            }
        }
        if (isset($map['MediaEncode'])) {
            $model->mediaEncode = $map['MediaEncode'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
