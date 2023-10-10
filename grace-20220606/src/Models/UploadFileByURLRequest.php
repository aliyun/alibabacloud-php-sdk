<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Grace\V20220606\Models;

use AlibabaCloud\Tea\Model;

class UploadFileByURLRequest extends Model
{
    /**
     * @example atp_stack.log
     *
     * @var string
     */
    public $displayName;

    /**
     * @example heap_dump
     *
     * @var string
     */
    public $type;

    /**
     * @example https://bucket.oss-cn-hangzhou.aliyuncs.com/file.log
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'displayName' => 'displayName',
        'type'        => 'type',
        'url'         => 'url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadFileByURLRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
