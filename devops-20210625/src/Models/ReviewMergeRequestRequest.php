<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class ReviewMergeRequestRequest extends Model
{
    /**
     * @example f0b1e61db5961df5975a93f9129d2513
     *
     * @var string
     */
    public $accessToken;

    /**
     * @var string[]
     */
    public $draftCommentIds;

    /**
     * @var string
     */
    public $reviewComment;

    /**
     * @example PASS
     *
     * @var string
     */
    public $reviewOpinion;

    /**
     * @example 60de7a6852743a5162b5f957
     *
     * @var string
     */
    public $organizationId;
    protected $_name = [
        'accessToken'     => 'accessToken',
        'draftCommentIds' => 'draftCommentIds',
        'reviewComment'   => 'reviewComment',
        'reviewOpinion'   => 'reviewOpinion',
        'organizationId'  => 'organizationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['accessToken'] = $this->accessToken;
        }
        if (null !== $this->draftCommentIds) {
            $res['draftCommentIds'] = $this->draftCommentIds;
        }
        if (null !== $this->reviewComment) {
            $res['reviewComment'] = $this->reviewComment;
        }
        if (null !== $this->reviewOpinion) {
            $res['reviewOpinion'] = $this->reviewOpinion;
        }
        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReviewMergeRequestRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessToken'])) {
            $model->accessToken = $map['accessToken'];
        }
        if (isset($map['draftCommentIds'])) {
            if (!empty($map['draftCommentIds'])) {
                $model->draftCommentIds = $map['draftCommentIds'];
            }
        }
        if (isset($map['reviewComment'])) {
            $model->reviewComment = $map['reviewComment'];
        }
        if (isset($map['reviewOpinion'])) {
            $model->reviewOpinion = $map['reviewOpinion'];
        }
        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }

        return $model;
    }
}
