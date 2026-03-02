<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class ReviewerListResult extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var Reviewer[]
     */
    public $reviewers;
    protected $_name = [
        'requestId' => 'requestId',
        'reviewers' => 'reviewers',
    ];

    public function validate()
    {
        if (\is_array($this->reviewers)) {
            Model::validateArray($this->reviewers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->reviewers) {
            if (\is_array($this->reviewers)) {
                $res['reviewers'] = [];
                $n1 = 0;
                foreach ($this->reviewers as $item1) {
                    $res['reviewers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['reviewers'])) {
            if (!empty($map['reviewers'])) {
                $model->reviewers = [];
                $n1 = 0;
                foreach ($map['reviewers'] as $item1) {
                    $model->reviewers[$n1] = Reviewer::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
