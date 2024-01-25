<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\Tea\Model;

class ListProductVersionsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $fuzzy;

    /**
     * @example 1
     *
     * @var string
     */
    public $pageNum;

    /**
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $platformsShrink;

    /**
     * @example test-product
     *
     * @var string
     */
    public $productName;

    /**
     * @example 54ccb2c9-3205-4159-8c44-xxxxxxxxxxxx
     *
     * @var string
     */
    public $productUID;

    /**
     * @example true
     *
     * @var bool
     */
    public $released;

    /**
     * @var string
     */
    public $supportedFoundationTypesShrink;

    /**
     * @var string
     */
    public $tagShrink;

    /**
     * @example 1.0.0
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'fuzzy'                          => 'fuzzy',
        'pageNum'                        => 'pageNum',
        'pageSize'                       => 'pageSize',
        'platformsShrink'                => 'platforms',
        'productName'                    => 'productName',
        'productUID'                     => 'productUID',
        'released'                       => 'released',
        'supportedFoundationTypesShrink' => 'supportedFoundationTypes',
        'tagShrink'                      => 'tag',
        'version'                        => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fuzzy) {
            $res['fuzzy'] = $this->fuzzy;
        }
        if (null !== $this->pageNum) {
            $res['pageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->platformsShrink) {
            $res['platforms'] = $this->platformsShrink;
        }
        if (null !== $this->productName) {
            $res['productName'] = $this->productName;
        }
        if (null !== $this->productUID) {
            $res['productUID'] = $this->productUID;
        }
        if (null !== $this->released) {
            $res['released'] = $this->released;
        }
        if (null !== $this->supportedFoundationTypesShrink) {
            $res['supportedFoundationTypes'] = $this->supportedFoundationTypesShrink;
        }
        if (null !== $this->tagShrink) {
            $res['tag'] = $this->tagShrink;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProductVersionsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fuzzy'])) {
            $model->fuzzy = $map['fuzzy'];
        }
        if (isset($map['pageNum'])) {
            $model->pageNum = $map['pageNum'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['platforms'])) {
            $model->platformsShrink = $map['platforms'];
        }
        if (isset($map['productName'])) {
            $model->productName = $map['productName'];
        }
        if (isset($map['productUID'])) {
            $model->productUID = $map['productUID'];
        }
        if (isset($map['released'])) {
            $model->released = $map['released'];
        }
        if (isset($map['supportedFoundationTypes'])) {
            $model->supportedFoundationTypesShrink = $map['supportedFoundationTypes'];
        }
        if (isset($map['tag'])) {
            $model->tagShrink = $map['tag'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
