<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class UpdateImageInfosRequest extends Model
{
    /**
     * @description The new information about the one or more images. You can modify the information about up to 20 images at a time. For more information, see the **UpdateContent** section of this topic.
     *
     * > The values of the nested parameters Title, Description, and Tags under the UpdateContent parameter cannot contain emoticons.
     * @example [{"ImageId":"ff8fe57e3461416c6a267a4e09****","Title":"test title","Description":"test description","Tags":"tag1,tag2"}]
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
     * @return UpdateImageInfosRequest
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
