<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;

class ReviewMergeRequestRequest extends Model
{
    /**
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
     * @var string
     */
    public $reviewOpinion;

    /**
     * @var string
     */
    public $organizationId;
    protected $_name = [
        'accessToken' => 'accessToken',
        'draftCommentIds' => 'draftCommentIds',
        'reviewComment' => 'reviewComment',
        'reviewOpinion' => 'reviewOpinion',
        'organizationId' => 'organizationId',
    ];

    public function validate()
    {
        if (\is_array($this->draftCommentIds)) {
            Model::validateArray($this->draftCommentIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['accessToken'] = $this->accessToken;
        }

        if (null !== $this->draftCommentIds) {
            if (\is_array($this->draftCommentIds)) {
                $res['draftCommentIds'] = [];
                $n1 = 0;
                foreach ($this->draftCommentIds as $item1) {
                    $res['draftCommentIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessToken'])) {
            $model->accessToken = $map['accessToken'];
        }

        if (isset($map['draftCommentIds'])) {
            if (!empty($map['draftCommentIds'])) {
                $model->draftCommentIds = [];
                $n1 = 0;
                foreach ($map['draftCommentIds'] as $item1) {
                    $model->draftCommentIds[$n1] = $item1;
                    ++$n1;
                }
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
