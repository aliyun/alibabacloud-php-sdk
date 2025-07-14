<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class UpdateUserTagMetaRequest extends Model
{
    /**
     * @description The tag description.
     *
     * - Format check: Maximum length is 255 characters.
     *
     * @example Job Positions within the Department
     *
     * @var string
     */
    public $tagDescription;

    /**
     * @description The specified TagID.
     *
     * - Format check: Maximum length is 64 characters.
     *
     * This parameter is required.
     *
     * @example e82f6c6c0333431bad0225b2f85e****
     *
     * @var string
     */
    public $tagId;

    /**
     * @description The tag name.
     * - Format check: Maximum length is 50 characters.
     * - Only Chinese, English, numbers, and /\\|[]() symbols are allowed.
     *
     * This parameter is required.
     *
     * @example Department
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
     * @return UpdateUserTagMetaRequest
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
