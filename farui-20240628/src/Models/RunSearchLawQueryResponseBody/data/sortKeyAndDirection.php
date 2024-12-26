<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models\RunSearchLawQueryResponseBody\data;

use AlibabaCloud\Tea\Model;

class sortKeyAndDirection extends Model
{
    /**
     * @example desc
     *
     * @var string
     */
    public $releaseYearMonthDate;

    /**
     * @example desc
     *
     * @var string
     */
    public $similarity;
    protected $_name = [
        'releaseYearMonthDate' => 'releaseYearMonthDate',
        'similarity'           => 'similarity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->releaseYearMonthDate) {
            $res['releaseYearMonthDate'] = $this->releaseYearMonthDate;
        }
        if (null !== $this->similarity) {
            $res['similarity'] = $this->similarity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sortKeyAndDirection
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['releaseYearMonthDate'])) {
            $model->releaseYearMonthDate = $map['releaseYearMonthDate'];
        }
        if (isset($map['similarity'])) {
            $model->similarity = $map['similarity'];
        }

        return $model;
    }
}
