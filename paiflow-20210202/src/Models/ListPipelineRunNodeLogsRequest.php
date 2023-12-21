<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIFlow\V20210202\Models;

use AlibabaCloud\Tea\Model;

class ListPipelineRunNodeLogsRequest extends Model
{
    /**
     * @example 1612180056
     *
     * @var int
     */
    public $fromTimeInSeconds;

    /**
     * @example abc
     *
     * @var string
     */
    public $keyword;

    /**
     * @example 0
     *
     * @var int
     */
    public $offset;

    /**
     * @example 100
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example false
     *
     * @var bool
     */
    public $reverse;

    /**
     * @example 1612180056
     *
     * @var int
     */
    public $toTimeInSeconds;

    /**
     * @var string
     */
    public $tokenId;
    protected $_name = [
        'fromTimeInSeconds' => 'FromTimeInSeconds',
        'keyword'           => 'Keyword',
        'offset'            => 'Offset',
        'pageSize'          => 'PageSize',
        'reverse'           => 'Reverse',
        'toTimeInSeconds'   => 'ToTimeInSeconds',
        'tokenId'           => 'TokenId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fromTimeInSeconds) {
            $res['FromTimeInSeconds'] = $this->fromTimeInSeconds;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->reverse) {
            $res['Reverse'] = $this->reverse;
        }
        if (null !== $this->toTimeInSeconds) {
            $res['ToTimeInSeconds'] = $this->toTimeInSeconds;
        }
        if (null !== $this->tokenId) {
            $res['TokenId'] = $this->tokenId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPipelineRunNodeLogsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FromTimeInSeconds'])) {
            $model->fromTimeInSeconds = $map['FromTimeInSeconds'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Reverse'])) {
            $model->reverse = $map['Reverse'];
        }
        if (isset($map['ToTimeInSeconds'])) {
            $model->toTimeInSeconds = $map['ToTimeInSeconds'];
        }
        if (isset($map['TokenId'])) {
            $model->tokenId = $map['TokenId'];
        }

        return $model;
    }
}
