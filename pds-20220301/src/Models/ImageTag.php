<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class ImageTag extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $coverFileCategory;

    /**
     * @var string
     */
    public $coverFileId;

    /**
     * @var float
     */
    public $coverOverallScore;

    /**
     * @var float
     */
    public $coverTagConfidence;

    /**
     * @var string
     */
    public $coverUrl;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'count'              => 'count',
        'coverFileCategory'  => 'cover_file_category',
        'coverFileId'        => 'cover_file_id',
        'coverOverallScore'  => 'cover_overall_score',
        'coverTagConfidence' => 'cover_tag_confidence',
        'coverUrl'           => 'cover_url',
        'name'               => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }
        if (null !== $this->coverFileCategory) {
            $res['cover_file_category'] = $this->coverFileCategory;
        }
        if (null !== $this->coverFileId) {
            $res['cover_file_id'] = $this->coverFileId;
        }
        if (null !== $this->coverOverallScore) {
            $res['cover_overall_score'] = $this->coverOverallScore;
        }
        if (null !== $this->coverTagConfidence) {
            $res['cover_tag_confidence'] = $this->coverTagConfidence;
        }
        if (null !== $this->coverUrl) {
            $res['cover_url'] = $this->coverUrl;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImageTag
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }
        if (isset($map['cover_file_category'])) {
            $model->coverFileCategory = $map['cover_file_category'];
        }
        if (isset($map['cover_file_id'])) {
            $model->coverFileId = $map['cover_file_id'];
        }
        if (isset($map['cover_overall_score'])) {
            $model->coverOverallScore = $map['cover_overall_score'];
        }
        if (isset($map['cover_tag_confidence'])) {
            $model->coverTagConfidence = $map['cover_tag_confidence'];
        }
        if (isset($map['cover_url'])) {
            $model->coverUrl = $map['cover_url'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
