<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class UpdateVideoInfosRequest extends Model
{
    /**
     * @description The new information about audios or videos. You can modify the information about up to 20 audios or videos at a time. Separate multiple audios or videos with commas (,). When you modify the information exceed 20 audios or videos at a time, the update will fail with an error code **CountExceededMax**.
     *
     * The value is a JSON string. For more information, see the **UpdateContent** section of this topic.
     * @example [{"VideoId":"f45cf4eba5cb90233389558c39****","Title":"test title1"},{"VideoId":"f45cf4eba5c84233389558c36****","Title":"test title2"}]
     *
     * @var string
     */
    public $updateContent;
    protected $_name = [
        'updateContent' => 'UpdateContent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->updateContent) {
            $res['UpdateContent'] = $this->updateContent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateVideoInfosRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UpdateContent'])) {
            $model->updateContent = $map['UpdateContent'];
        }

        return $model;
    }
}
