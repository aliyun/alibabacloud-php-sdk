<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryUserTagMetaListResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The description of the tag.
     *
     * @example Used to distinguish some positions
     *
     * @var string
     */
    public $tagDescription;

    /**
     * @description The ID of the label.
     *
     * @example pop_001
     *
     * @var string
     */
    public $tagId;

    /**
     * @description The name of the tag.
     *
     * @example Position
     *
     * @var string
     */
    public $tagName;
    protected $_name = [
        'tagDescription' => 'TagDescription',
        'tagId' => 'TagId',
        'tagName' => 'TagName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagDescription) {
            $res['TagDescription'] = $this->tagDescription;
        }
        if (null !== $this->tagId) {
            $res['TagId'] = $this->tagId;
        }
        if (null !== $this->tagName) {
            $res['TagName'] = $this->tagName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagDescription'])) {
            $model->tagDescription = $map['TagDescription'];
        }
        if (isset($map['TagId'])) {
            $model->tagId = $map['TagId'];
        }
        if (isset($map['TagName'])) {
            $model->tagName = $map['TagName'];
        }

        return $model;
    }
}
