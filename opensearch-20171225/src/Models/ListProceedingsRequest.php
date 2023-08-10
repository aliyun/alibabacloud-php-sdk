<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class ListProceedingsRequest extends Model
{
    /**
     * @description Specifies whether the filtering is complete.
     *
     * @example true
     *
     * @var bool
     */
    public $filterFinished;
    protected $_name = [
        'filterFinished' => 'filterFinished',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filterFinished) {
            $res['filterFinished'] = $this->filterFinished;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProceedingsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['filterFinished'])) {
            $model->filterFinished = $map['filterFinished'];
        }

        return $model;
    }
}
