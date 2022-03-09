<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\SDK\Holowatcher\V20200730\Models\MaterialFindAllPictureResponseBody\content;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\MaterialFindAllPictureResponseBody\pageable;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\MaterialFindAllPictureResponseBody\sort;
use AlibabaCloud\Tea\Model;

class MaterialFindAllPictureResponseBody extends Model
{
    /**
     * @var content[]
     */
    public $content;

    /**
     * @var bool
     */
    public $empty;

    /**
     * @var bool
     */
    public $first;

    /**
     * @var bool
     */
    public $last;

    /**
     * @var int
     */
    public $number;

    /**
     * @var int
     */
    public $numberOfElements;

    /**
     * @var pageable
     */
    public $pageable;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $size;

    /**
     * @var sort
     */
    public $sort;

    /**
     * @var int
     */
    public $totalElements;

    /**
     * @var int
     */
    public $totalPages;
    protected $_name = [
        'content'          => 'Content',
        'empty'            => 'Empty',
        'first'            => 'First',
        'last'             => 'Last',
        'number'           => 'Number',
        'numberOfElements' => 'NumberOfElements',
        'pageable'         => 'Pageable',
        'requestId'        => 'RequestId',
        'size'             => 'Size',
        'sort'             => 'Sort',
        'totalElements'    => 'TotalElements',
        'totalPages'       => 'TotalPages',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = [];
            if (null !== $this->content && \is_array($this->content)) {
                $n = 0;
                foreach ($this->content as $item) {
                    $res['Content'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->empty) {
            $res['Empty'] = $this->empty;
        }
        if (null !== $this->first) {
            $res['First'] = $this->first;
        }
        if (null !== $this->last) {
            $res['Last'] = $this->last;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->numberOfElements) {
            $res['NumberOfElements'] = $this->numberOfElements;
        }
        if (null !== $this->pageable) {
            $res['Pageable'] = null !== $this->pageable ? $this->pageable->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->sort) {
            $res['Sort'] = null !== $this->sort ? $this->sort->toMap() : null;
        }
        if (null !== $this->totalElements) {
            $res['TotalElements'] = $this->totalElements;
        }
        if (null !== $this->totalPages) {
            $res['TotalPages'] = $this->totalPages;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MaterialFindAllPictureResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            if (!empty($map['Content'])) {
                $model->content = [];
                $n              = 0;
                foreach ($map['Content'] as $item) {
                    $model->content[$n++] = null !== $item ? content::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Empty'])) {
            $model->empty = $map['Empty'];
        }
        if (isset($map['First'])) {
            $model->first = $map['First'];
        }
        if (isset($map['Last'])) {
            $model->last = $map['Last'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['NumberOfElements'])) {
            $model->numberOfElements = $map['NumberOfElements'];
        }
        if (isset($map['Pageable'])) {
            $model->pageable = pageable::fromMap($map['Pageable']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Sort'])) {
            $model->sort = sort::fromMap($map['Sort']);
        }
        if (isset($map['TotalElements'])) {
            $model->totalElements = $map['TotalElements'];
        }
        if (isset($map['TotalPages'])) {
            $model->totalPages = $map['TotalPages'];
        }

        return $model;
    }
}
