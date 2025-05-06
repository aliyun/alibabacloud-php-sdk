<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models\RunSearchLawQueryResponseBody\data;

use AlibabaCloud\Dara\Model;

class sortKeyAndDirection extends Model
{
    /**
     * @var string
     */
    public $releaseYearMonthDate;

    /**
     * @var string
     */
    public $similarity;
    protected $_name = [
        'releaseYearMonthDate' => 'releaseYearMonthDate',
        'similarity' => 'similarity',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
