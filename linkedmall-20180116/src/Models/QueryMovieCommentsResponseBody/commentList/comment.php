<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryMovieCommentsResponseBody\commentList;

use AlibabaCloud\Tea\Model;

class comment extends Model
{
    /**
     * @var string
     */
    public $commentTime;

    /**
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $favorCount;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $movieId;

    /**
     * @var string
     */
    public $nickName;

    /**
     * @var int
     */
    public $remark;

    /**
     * @var string
     */
    public $subject;
    protected $_name = [
        'commentTime' => 'CommentTime',
        'content'     => 'Content',
        'favorCount'  => 'FavorCount',
        'id'          => 'Id',
        'movieId'     => 'MovieId',
        'nickName'    => 'NickName',
        'remark'      => 'Remark',
        'subject'     => 'Subject',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commentTime) {
            $res['CommentTime'] = $this->commentTime;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->favorCount) {
            $res['FavorCount'] = $this->favorCount;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->movieId) {
            $res['MovieId'] = $this->movieId;
        }
        if (null !== $this->nickName) {
            $res['NickName'] = $this->nickName;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->subject) {
            $res['Subject'] = $this->subject;
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
        if (isset($map['CommentTime'])) {
            $model->commentTime = $map['CommentTime'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['FavorCount'])) {
            $model->favorCount = $map['FavorCount'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MovieId'])) {
            $model->movieId = $map['MovieId'];
        }
        if (isset($map['NickName'])) {
            $model->nickName = $map['NickName'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['Subject'])) {
            $model->subject = $map['Subject'];
        }

        return $model;
    }
}
