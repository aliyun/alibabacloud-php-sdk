<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class LibraryReviewListResult extends Model
{
    /**
     * @var LibraryReview[]
     */
    public $libraryReviews;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'libraryReviews' => 'libraryReviews',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->libraryReviews)) {
            Model::validateArray($this->libraryReviews);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->libraryReviews) {
            if (\is_array($this->libraryReviews)) {
                $res['libraryReviews'] = [];
                $n1 = 0;
                foreach ($this->libraryReviews as $item1) {
                    $res['libraryReviews'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['libraryReviews'])) {
            if (!empty($map['libraryReviews'])) {
                $model->libraryReviews = [];
                $n1 = 0;
                foreach ($map['libraryReviews'] as $item1) {
                    $model->libraryReviews[$n1] = LibraryReview::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
