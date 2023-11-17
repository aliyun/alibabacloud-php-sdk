<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20230313\Models\PopGetAITryOnJobResponseBody\data\subTasks;

use AlibabaCloud\Tea\Model;

class feedback extends Model
{
    /**
     * @var int[]
     */
    public $dislikeTags;

    /**
     * @var string
     */
    public $otherReason;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var int
     */
    public $rating;
    protected $_name = [
        'dislikeTags' => 'DislikeTags',
        'otherReason' => 'OtherReason',
        'projectId'   => 'ProjectId',
        'rating'      => 'Rating',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dislikeTags) {
            $res['DislikeTags'] = $this->dislikeTags;
        }
        if (null !== $this->otherReason) {
            $res['OtherReason'] = $this->otherReason;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->rating) {
            $res['Rating'] = $this->rating;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return feedback
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DislikeTags'])) {
            if (!empty($map['DislikeTags'])) {
                $model->dislikeTags = $map['DislikeTags'];
            }
        }
        if (isset($map['OtherReason'])) {
            $model->otherReason = $map['OtherReason'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Rating'])) {
            $model->rating = $map['Rating'];
        }

        return $model;
    }
}
