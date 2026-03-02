<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class LibraryReviewCreateCmd extends Model
{
    /**
     * @var int
     */
    public $libraryId;

    /**
     * @var string
     */
    public $libraryUrl;

    /**
     * @var int
     */
    public $marketId;

    /**
     * @var string
     */
    public $reviewerId;
    protected $_name = [
        'libraryId' => 'libraryId',
        'libraryUrl' => 'libraryUrl',
        'marketId' => 'marketId',
        'reviewerId' => 'reviewerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->libraryId) {
            $res['libraryId'] = $this->libraryId;
        }

        if (null !== $this->libraryUrl) {
            $res['libraryUrl'] = $this->libraryUrl;
        }

        if (null !== $this->marketId) {
            $res['marketId'] = $this->marketId;
        }

        if (null !== $this->reviewerId) {
            $res['reviewerId'] = $this->reviewerId;
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
        if (isset($map['libraryId'])) {
            $model->libraryId = $map['libraryId'];
        }

        if (isset($map['libraryUrl'])) {
            $model->libraryUrl = $map['libraryUrl'];
        }

        if (isset($map['marketId'])) {
            $model->marketId = $map['marketId'];
        }

        if (isset($map['reviewerId'])) {
            $model->reviewerId = $map['reviewerId'];
        }

        return $model;
    }
}
