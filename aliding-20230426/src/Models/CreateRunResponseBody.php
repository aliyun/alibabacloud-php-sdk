<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateRunResponseBody\messages;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateRunResponseBody\run;
use AlibabaCloud\Tea\Model;

class CreateRunResponseBody extends Model
{
    /**
     * @var messages[]
     */
    public $messages;

    /**
     * @example 0FAAEC9C-C6C8-5C87-AF8E-1195889BBXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @var run
     */
    public $run;
    protected $_name = [
        'messages' => 'messages',
        'requestId' => 'requestId',
        'run' => 'run',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->messages) {
            $res['messages'] = [];
            if (null !== $this->messages && \is_array($this->messages)) {
                $n = 0;
                foreach ($this->messages as $item) {
                    $res['messages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->run) {
            $res['run'] = null !== $this->run ? $this->run->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRunResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['messages'])) {
            if (!empty($map['messages'])) {
                $model->messages = [];
                $n = 0;
                foreach ($map['messages'] as $item) {
                    $model->messages[$n++] = null !== $item ? messages::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['run'])) {
            $model->run = run::fromMap($map['run']);
        }

        return $model;
    }
}
