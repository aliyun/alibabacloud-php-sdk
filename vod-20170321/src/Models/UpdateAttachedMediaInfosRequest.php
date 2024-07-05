<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class UpdateAttachedMediaInfosRequest extends Model
{
    /**
     * @description The new information about auxiliary media assets. You can modify the information about up to 20 auxiliary media assets at a time. For more information, see the **UpdateContent** section of this topic.
     *
     * This parameter is required.
     * @example [{"MediaId ":"bbc65bba53f6ed90de118a7849****","Title":" test title1","Description":"test description1","Tags":"tag1,tag2"},{"MediaId ":"f45cf4eba5cb90233389558c39****","Title2":"test title2","Description2":"test description2","Tags":"tag3,tag4"}]
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
     * @return UpdateAttachedMediaInfosRequest
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
