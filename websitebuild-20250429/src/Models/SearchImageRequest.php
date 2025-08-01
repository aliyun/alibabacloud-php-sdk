<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Tea\Model;

class SearchImageRequest extends Model
{
    /**
     * @example #B0B0B0
     *
     * @var string
     */
    public $colorHex;

    /**
     * @var bool
     */
    public $hasPerson;

    /**
     * @example WindowsWithMssqlStdLicense
     *
     * @var string
     */
    public $imageCategory;

    /**
     * @example 16:9
     *
     * @var string
     */
    public $imageRatio;

    /**
     * @example 4000
     *
     * @var int
     */
    public $maxHeight;

    /**
     * @example 500
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example 4000
     *
     * @var int
     */
    public $maxWidth;

    /**
     * @example 500
     *
     * @var int
     */
    public $minHeight;

    /**
     * @example 500
     *
     * @var int
     */
    public $minWidth;

    /**
     * @example FFh3Xqm+JgZ/U9Jyb7wdVr9LWk80Tghn5UZjbcWEVEderBcbVF+Y6PS0i8PpCL4PQZ3e0C9oEH0Asd4tJEuGtkl2WuKdiWZpEwadNydQdJPFM=
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description Osskey。
     *
     * @example backend/detection/objects/r-0008ujvfksltf5j45n81/task-000hckiuwyau0gwn17vq.jpg
     *
     * @var string
     */
    public $ossKey;

    /**
     * @example 10
     *
     * @var int
     */
    public $size;

    /**
     * @example 0
     *
     * @var int
     */
    public $start;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'colorHex' => 'ColorHex',
        'hasPerson' => 'HasPerson',
        'imageCategory' => 'ImageCategory',
        'imageRatio' => 'ImageRatio',
        'maxHeight' => 'MaxHeight',
        'maxResults' => 'MaxResults',
        'maxWidth' => 'MaxWidth',
        'minHeight' => 'MinHeight',
        'minWidth' => 'MinWidth',
        'nextToken' => 'NextToken',
        'ossKey' => 'OssKey',
        'size' => 'Size',
        'start' => 'Start',
        'tags' => 'Tags',
        'text' => 'Text',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->colorHex) {
            $res['ColorHex'] = $this->colorHex;
        }
        if (null !== $this->hasPerson) {
            $res['HasPerson'] = $this->hasPerson;
        }
        if (null !== $this->imageCategory) {
            $res['ImageCategory'] = $this->imageCategory;
        }
        if (null !== $this->imageRatio) {
            $res['ImageRatio'] = $this->imageRatio;
        }
        if (null !== $this->maxHeight) {
            $res['MaxHeight'] = $this->maxHeight;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->maxWidth) {
            $res['MaxWidth'] = $this->maxWidth;
        }
        if (null !== $this->minHeight) {
            $res['MinHeight'] = $this->minHeight;
        }
        if (null !== $this->minWidth) {
            $res['MinWidth'] = $this->minWidth;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->ossKey) {
            $res['OssKey'] = $this->ossKey;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColorHex'])) {
            $model->colorHex = $map['ColorHex'];
        }
        if (isset($map['HasPerson'])) {
            $model->hasPerson = $map['HasPerson'];
        }
        if (isset($map['ImageCategory'])) {
            $model->imageCategory = $map['ImageCategory'];
        }
        if (isset($map['ImageRatio'])) {
            $model->imageRatio = $map['ImageRatio'];
        }
        if (isset($map['MaxHeight'])) {
            $model->maxHeight = $map['MaxHeight'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['MaxWidth'])) {
            $model->maxWidth = $map['MaxWidth'];
        }
        if (isset($map['MinHeight'])) {
            $model->minHeight = $map['MinHeight'];
        }
        if (isset($map['MinWidth'])) {
            $model->minWidth = $map['MinWidth'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OssKey'])) {
            $model->ossKey = $map['OssKey'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = $map['Tags'];
            }
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        return $model;
    }
}
