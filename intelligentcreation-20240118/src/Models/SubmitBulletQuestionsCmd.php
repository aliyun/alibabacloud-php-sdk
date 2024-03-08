<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240118\Models;

use AlibabaCloud\SDK\IntelligentCreation\V20240118\Models\SubmitBulletQuestionsCmd\questions;
use AlibabaCloud\Tea\Model;

class SubmitBulletQuestionsCmd extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var questions[]
     */
    public $questions;

    /**
     * @var string
     */
    public $roomId;

    /**
     * @var string
     */
    public $subAccountId;
    protected $_name = [
        'accountId'    => 'accountId',
        'questions'    => 'questions',
        'roomId'       => 'roomId',
        'subAccountId' => 'subAccountId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }
        if (null !== $this->questions) {
            $res['questions'] = [];
            if (null !== $this->questions && \is_array($this->questions)) {
                $n = 0;
                foreach ($this->questions as $item) {
                    $res['questions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->roomId) {
            $res['roomId'] = $this->roomId;
        }
        if (null !== $this->subAccountId) {
            $res['subAccountId'] = $this->subAccountId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitBulletQuestionsCmd
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }
        if (isset($map['questions'])) {
            if (!empty($map['questions'])) {
                $model->questions = [];
                $n                = 0;
                foreach ($map['questions'] as $item) {
                    $model->questions[$n++] = null !== $item ? questions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['roomId'])) {
            $model->roomId = $map['roomId'];
        }
        if (isset($map['subAccountId'])) {
            $model->subAccountId = $map['subAccountId'];
        }

        return $model;
    }
}
