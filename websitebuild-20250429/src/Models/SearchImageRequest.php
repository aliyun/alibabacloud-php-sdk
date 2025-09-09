<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class SearchImageRequest extends Model
{
    /**
     * @var string
     */
    public $colorHex;

    /**
     * @var bool
     */
    public $hasPerson;

    /**
     * @var string
     */
    public $imageCategory;

    /**
     * @var string
     */
    public $imageRatio;

    /**
     * @var int
     */
    public $maxHeight;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var int
     */
    public $maxWidth;

    /**
     * @var int
     */
    public $minHeight;

    /**
     * @var int
     */
    public $minWidth;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $ossKey;

    /**
     * @var int
     */
    public $size;

    /**
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

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->text) {
            $res['Text'] = $this->text;
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
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        return $model;
    }
}
