<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryMovieCommentsResponseBody\commentList;

use AlibabaCloud\Tea\Model;

class comment extends Model
{
    /**
     * @var int
     */
    public $remark;

    /**
     * @var int
     */
    public $favorCount;

    /**
     * @var string
     */
    public $subject;

    /**
     * @var int
     */
    public $movieId;

    /**
     * @var string
     */
    public $nickName;

    /**
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $commentTime;
    protected $_name = [
        'remark'      => 'Remark',
        'favorCount'  => 'FavorCount',
        'subject'     => 'Subject',
        'movieId'     => 'MovieId',
        'nickName'    => 'NickName',
        'content'     => 'Content',
        'id'          => 'Id',
        'commentTime' => 'CommentTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->favorCount) {
            $res['FavorCount'] = $this->favorCount;
        }
        if (null !== $this->subject) {
            $res['Subject'] = $this->subject;
        }
        if (null !== $this->movieId) {
            $res['MovieId'] = $this->movieId;
        }
        if (null !== $this->nickName) {
            $res['NickName'] = $this->nickName;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->commentTime) {
            $res['CommentTime'] = $this->commentTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return comment
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['FavorCount'])) {
            $model->favorCount = $map['FavorCount'];
        }
        if (isset($map['Subject'])) {
            $model->subject = $map['Subject'];
        }
        if (isset($map['MovieId'])) {
            $model->movieId = $map['MovieId'];
        }
        if (isset($map['NickName'])) {
            $model->nickName = $map['NickName'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['CommentTime'])) {
            $model->commentTime = $map['CommentTime'];
        }

        return $model;
    }
}
