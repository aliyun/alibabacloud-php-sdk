<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class AddUserTagMetaRequest extends Model
{
    /**
     * @description Tag description. Format check: maximum length of 255 characters.
     *
     * @example test
     *
     * @var string
     */
    public $tagDescription;

    /**
     * @description Tag name. Format check:
     * - Maximum length of 50 characters.
     * - Only Chinese, English, numbers, and /\\|[]() symbols are allowed.
     *
     * This parameter is required.
     *
     * @example test
     *
     * @var string
     */
    public $tagName;
    protected $_name = [
        'tagDescription' => 'TagDescription',
        'tagName' => 'TagName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagDescription) {
            $res['TagDescription'] = $this->tagDescription;
        }
        if (null !== $this->tagName) {
            $res['TagName'] = $this->tagName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddUserTagMetaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagDescription'])) {
            $model->tagDescription = $map['TagDescription'];
        }
        if (isset($map['TagName'])) {
            $model->tagName = $map['TagName'];
        }

        return $model;
    }
}
