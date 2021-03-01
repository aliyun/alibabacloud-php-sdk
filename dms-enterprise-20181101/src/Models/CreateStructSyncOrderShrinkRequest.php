<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class CreateStructSyncOrderShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $relatedUserListShrink;

    /**
     * @var string
     */
    public $paramShrink;
    protected $_name = [
        'comment'               => 'Comment',
        'relatedUserListShrink' => 'RelatedUserList',
        'paramShrink'           => 'Param',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->relatedUserListShrink) {
            $res['RelatedUserList'] = $this->relatedUserListShrink;
        }
        if (null !== $this->paramShrink) {
            $res['Param'] = $this->paramShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateStructSyncOrderShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['RelatedUserList'])) {
            $model->relatedUserListShrink = $map['RelatedUserList'];
        }
        if (isset($map['Param'])) {
            $model->paramShrink = $map['Param'];
        }

        return $model;
    }
}
