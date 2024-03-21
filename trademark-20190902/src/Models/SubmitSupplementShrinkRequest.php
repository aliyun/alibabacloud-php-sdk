<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models;

use AlibabaCloud\Tea\Model;

class SubmitSupplementShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @example 1
     *
     * @var int
     */
    public $supplementId;

    /**
     * @var string
     */
    public $userFilesShrink;
    protected $_name = [
        'content'         => 'Content',
        'supplementId'    => 'SupplementId',
        'userFilesShrink' => 'UserFiles',
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
        if (null !== $this->supplementId) {
            $res['SupplementId'] = $this->supplementId;
        }
        if (null !== $this->userFilesShrink) {
            $res['UserFiles'] = $this->userFilesShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitSupplementShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['SupplementId'])) {
            $model->supplementId = $map['SupplementId'];
        }
        if (isset($map['UserFiles'])) {
            $model->userFilesShrink = $map['UserFiles'];
        }

        return $model;
    }
}
