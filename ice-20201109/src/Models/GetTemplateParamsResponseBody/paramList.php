<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetTemplateParamsResponseBody;

use AlibabaCloud\Tea\Model;

class paramList extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $coverUrl;

    /**
     * @example video1
     *
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $mediaUrl;

    /**
     * @example Image
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'content'  => 'Content',
        'coverUrl' => 'CoverUrl',
        'key'      => 'Key',
        'mediaUrl' => 'MediaUrl',
        'type'     => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->coverUrl) {
            $res['CoverUrl'] = $this->coverUrl;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->mediaUrl) {
            $res['MediaUrl'] = $this->mediaUrl;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return paramList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['CoverUrl'])) {
            $model->coverUrl = $map['CoverUrl'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['MediaUrl'])) {
            $model->mediaUrl = $map['MediaUrl'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
