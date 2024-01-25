<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\SDK\Adp\V20210720\Models\ListProductVersionsRequest\platforms;
use AlibabaCloud\SDK\Adp\V20210720\Models\ListProductVersionsRequest\tag;
use AlibabaCloud\Tea\Model;

class ListProductVersionsRequest extends Model
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
     * @var platforms[]
     */
    public $platforms;

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
     * @var string[]
     */
    public $supportedFoundationTypes;

    /**
     * @var tag
     */
    public $tag;

    /**
     * @example 1.0.0
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'fuzzy'                    => 'fuzzy',
        'pageNum'                  => 'pageNum',
        'pageSize'                 => 'pageSize',
        'platforms'                => 'platforms',
        'productName'              => 'productName',
        'productUID'               => 'productUID',
        'released'                 => 'released',
        'supportedFoundationTypes' => 'supportedFoundationTypes',
        'tag'                      => 'tag',
        'version'                  => 'version',
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
        if (null !== $this->platforms) {
            $res['platforms'] = [];
            if (null !== $this->platforms && \is_array($this->platforms)) {
                $n = 0;
                foreach ($this->platforms as $item) {
                    $res['platforms'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->supportedFoundationTypes) {
            $res['supportedFoundationTypes'] = $this->supportedFoundationTypes;
        }
        if (null !== $this->tag) {
            $res['tag'] = null !== $this->tag ? $this->tag->toMap() : null;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProductVersionsRequest
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
            if (!empty($map['platforms'])) {
                $model->platforms = [];
                $n                = 0;
                foreach ($map['platforms'] as $item) {
                    $model->platforms[$n++] = null !== $item ? platforms::fromMap($item) : $item;
                }
            }
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
            if (!empty($map['supportedFoundationTypes'])) {
                $model->supportedFoundationTypes = $map['supportedFoundationTypes'];
            }
        }
        if (isset($map['tag'])) {
            $model->tag = tag::fromMap($map['tag']);
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
