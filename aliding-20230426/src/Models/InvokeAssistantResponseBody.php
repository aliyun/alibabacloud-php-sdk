<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeAssistantResponseBody\content;

class InvokeAssistantResponseBody extends Model
{
    /**
     * @var content[]
     */
    public $content;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var bool
     */
    public $streamEnd;
    protected $_name = [
        'content' => 'content',
        'requestId' => 'requestId',
        'sessionId' => 'sessionId',
        'streamEnd' => 'streamEnd',
    ];

    public function validate()
    {
        if (\is_array($this->content)) {
            Model::validateArray($this->content);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            if (\is_array($this->content)) {
                $res['content'] = [];
                $n1 = 0;
                foreach ($this->content as $item1) {
                    $res['content'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        if (null !== $this->streamEnd) {
            $res['streamEnd'] = $this->streamEnd;
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
        if (isset($map['content'])) {
            if (!empty($map['content'])) {
                $model->content = [];
                $n1 = 0;
                foreach ($map['content'] as $item1) {
                    $model->content[$n1++] = content::fromMap($item1);
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        if (isset($map['streamEnd'])) {
            $model->streamEnd = $map['streamEnd'];
        }

        return $model;
    }
}
