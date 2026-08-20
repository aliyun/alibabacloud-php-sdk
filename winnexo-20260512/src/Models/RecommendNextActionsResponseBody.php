<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\RecommendNextActionsResponseBody\nextActions;

class RecommendNextActionsResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var nextActions[]
     */
    public $nextActions;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'code' => 'code',
        'message' => 'message',
        'nextActions' => 'nextActions',
        'requestId' => 'requestId',
        'title' => 'title',
    ];

    public function validate()
    {
        if (\is_array($this->nextActions)) {
            Model::validateArray($this->nextActions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->nextActions) {
            if (\is_array($this->nextActions)) {
                $res['nextActions'] = [];
                $n1 = 0;
                foreach ($this->nextActions as $item1) {
                    $res['nextActions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['nextActions'])) {
            if (!empty($map['nextActions'])) {
                $model->nextActions = [];
                $n1 = 0;
                foreach ($map['nextActions'] as $item1) {
                    $model->nextActions[$n1] = nextActions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
