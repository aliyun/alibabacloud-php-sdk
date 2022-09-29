<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;

class SearchBodyTraceShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $dbId;

    /**
     * @var string
     */
    public $imagesShrink;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var float
     */
    public $minScore;
    protected $_name = [
        'dbId'         => 'DbId',
        'imagesShrink' => 'Images',
        'limit'        => 'Limit',
        'minScore'     => 'MinScore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->imagesShrink) {
            $res['Images'] = $this->imagesShrink;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->minScore) {
            $res['MinScore'] = $this->minScore;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchBodyTraceShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['Images'])) {
            $model->imagesShrink = $map['Images'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['MinScore'])) {
            $model->minScore = $map['MinScore'];
        }

        return $model;
    }
}
