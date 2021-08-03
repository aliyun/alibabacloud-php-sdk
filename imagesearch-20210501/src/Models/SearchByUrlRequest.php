<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20210501\Models;

use AlibabaCloud\Tea\Model;

class SearchByUrlRequest extends Model
{
    /**
     * @var string
     */
    public $picUrl;

    /**
     * @var int
     */
    public $categoryId;

    /**
     * @var bool
     */
    public $crop;

    /**
     * @var string
     */
    public $region;

    /**
     * @var int
     */
    public $start;

    /**
     * @var int
     */
    public $num;

    /**
     * @var string
     */
    public $fields;

    /**
     * @var int
     */
    public $relationId;

    /**
     * @var string
     */
    public $pid;
    protected $_name = [
        'picUrl'     => 'PicUrl',
        'categoryId' => 'CategoryId',
        'crop'       => 'Crop',
        'region'     => 'Region',
        'start'      => 'Start',
        'num'        => 'Num',
        'fields'     => 'Fields',
        'relationId' => 'RelationId',
        'pid'        => 'Pid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->picUrl) {
            $res['PicUrl'] = $this->picUrl;
        }
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->crop) {
            $res['Crop'] = $this->crop;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }
        if (null !== $this->num) {
            $res['Num'] = $this->num;
        }
        if (null !== $this->fields) {
            $res['Fields'] = $this->fields;
        }
        if (null !== $this->relationId) {
            $res['RelationId'] = $this->relationId;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchByUrlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PicUrl'])) {
            $model->picUrl = $map['PicUrl'];
        }
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['Crop'])) {
            $model->crop = $map['Crop'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }
        if (isset($map['Num'])) {
            $model->num = $map['Num'];
        }
        if (isset($map['Fields'])) {
            $model->fields = $map['Fields'];
        }
        if (isset($map['RelationId'])) {
            $model->relationId = $map['RelationId'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }

        return $model;
    }
}
