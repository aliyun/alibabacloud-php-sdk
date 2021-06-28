<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetSQLReviewOptimizeDetailResponseBody\optimizeDetail;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetSQLReviewOptimizeDetailResponseBody\optimizeDetail\qualityResult\results;
use AlibabaCloud\Tea\Model;

class qualityResult extends Model
{
    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var results[]
     */
    public $results;

    /**
     * @var bool
     */
    public $occurError;
    protected $_name = [
        'errorMessage' => 'ErrorMessage',
        'results'      => 'Results',
        'occurError'   => 'OccurError',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->results) {
            $res['Results'] = [];
            if (null !== $this->results && \is_array($this->results)) {
                $n = 0;
                foreach ($this->results as $item) {
                    $res['Results'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->occurError) {
            $res['OccurError'] = $this->occurError;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return qualityResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['Results'])) {
            if (!empty($map['Results'])) {
                $model->results = [];
                $n              = 0;
                foreach ($map['Results'] as $item) {
                    $model->results[$n++] = null !== $item ? results::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OccurError'])) {
            $model->occurError = $map['OccurError'];
        }

        return $model;
    }
}
