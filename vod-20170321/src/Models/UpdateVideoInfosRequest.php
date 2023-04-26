<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class UpdateVideoInfosRequest extends Model
{
    /**
     * @description ## UpdateContent
     *
     * | CateId | Long | No | The ID of the category. |
     * @example Modifies the information about multiple videos at a time.
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
