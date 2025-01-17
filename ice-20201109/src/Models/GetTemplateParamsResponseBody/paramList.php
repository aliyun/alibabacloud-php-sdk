<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetTemplateParamsResponseBody;

use AlibabaCloud\Dara\Model;

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
     * @var string
     */
    public $key;
    /**
     * @var string
     */
    public $mediaUrl;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
