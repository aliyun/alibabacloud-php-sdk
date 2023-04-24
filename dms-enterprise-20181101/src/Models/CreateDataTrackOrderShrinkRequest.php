<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class CreateDataTrackOrderShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $paramShrink;

    /**
     * @var string
     */
    public $relatedUserListShrink;

    /**
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'comment'               => 'Comment',
        'paramShrink'           => 'Param',
        'relatedUserListShrink' => 'RelatedUserList',
        'tid'                   => 'Tid',
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
        if (null !== $this->paramShrink) {
            $res['Param'] = $this->paramShrink;
        }
        if (null !== $this->relatedUserListShrink) {
            $res['RelatedUserList'] = $this->relatedUserListShrink;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDataTrackOrderShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['Param'])) {
            $model->paramShrink = $map['Param'];
        }
        if (isset($map['RelatedUserList'])) {
            $model->relatedUserListShrink = $map['RelatedUserList'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
