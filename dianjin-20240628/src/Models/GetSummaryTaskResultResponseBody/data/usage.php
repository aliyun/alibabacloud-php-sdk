<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetSummaryTaskResultResponseBody\data;

use AlibabaCloud\Dara\Model;

class usage extends Model
{
    /**
     * @var int
     */
    public $imageCount;
    /**
     * @var int
     */
    public $imageTokens;
    /**
     * @var int
     */
    public $inputTokens;
    /**
     * @var int
     */
    public $outputTokens;
    /**
     * @var int
     */
    public $totalTokens;
    protected $_name = [
        'imageCount'   => 'imageCount',
        'imageTokens'  => 'imageTokens',
        'inputTokens'  => 'inputTokens',
        'outputTokens' => 'outputTokens',
        'totalTokens'  => 'totalTokens',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageCount) {
            $res['imageCount'] = $this->imageCount;
        }

        if (null !== $this->imageTokens) {
            $res['imageTokens'] = $this->imageTokens;
        }

        if (null !== $this->inputTokens) {
            $res['inputTokens'] = $this->inputTokens;
        }

        if (null !== $this->outputTokens) {
            $res['outputTokens'] = $this->outputTokens;
        }

        if (null !== $this->totalTokens) {
            $res['totalTokens'] = $this->totalTokens;
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
        if (isset($map['imageCount'])) {
            $model->imageCount = $map['imageCount'];
        }

        if (isset($map['imageTokens'])) {
            $model->imageTokens = $map['imageTokens'];
        }

        if (isset($map['inputTokens'])) {
            $model->inputTokens = $map['inputTokens'];
        }

        if (isset($map['outputTokens'])) {
            $model->outputTokens = $map['outputTokens'];
        }

        if (isset($map['totalTokens'])) {
            $model->totalTokens = $map['totalTokens'];
        }

        return $model;
    }
}
