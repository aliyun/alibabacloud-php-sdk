<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetTaskDetailBaseResponseBody\object;

use AlibabaCloud\Tea\Model;

class badges extends Model
{
    /**
     * @var int
     */
    public $likesCount;

    /**
     * @var int
     */
    public $objectlinksCount;

    /**
     * @var int
     */
    public $attachmentsCount;

    /**
     * @var int
     */
    public $commentsCount;
    protected $_name = [
        'likesCount'       => 'LikesCount',
        'objectlinksCount' => 'ObjectlinksCount',
        'attachmentsCount' => 'AttachmentsCount',
        'commentsCount'    => 'CommentsCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->likesCount) {
            $res['LikesCount'] = $this->likesCount;
        }
        if (null !== $this->objectlinksCount) {
            $res['ObjectlinksCount'] = $this->objectlinksCount;
        }
        if (null !== $this->attachmentsCount) {
            $res['AttachmentsCount'] = $this->attachmentsCount;
        }
        if (null !== $this->commentsCount) {
            $res['CommentsCount'] = $this->commentsCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return badges
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LikesCount'])) {
            $model->likesCount = $map['LikesCount'];
        }
        if (isset($map['ObjectlinksCount'])) {
            $model->objectlinksCount = $map['ObjectlinksCount'];
        }
        if (isset($map['AttachmentsCount'])) {
            $model->attachmentsCount = $map['AttachmentsCount'];
        }
        if (isset($map['CommentsCount'])) {
            $model->commentsCount = $map['CommentsCount'];
        }

        return $model;
    }
}
