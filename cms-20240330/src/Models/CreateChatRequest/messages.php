<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\CreateChatRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateChatRequest\messages\contents;

class messages extends Model
{
    /**
     * @var contents[]
     */
    public $contents;

    /**
     * @var string
     */
    public $messageId;

    /**
     * @var string
     */
    public $role;

    /**
     * @var mixed[][]
     */
    public $tools;
    protected $_name = [
        'contents' => 'contents',
        'messageId' => 'messageId',
        'role' => 'role',
        'tools' => 'tools',
    ];

    public function validate()
    {
        if (\is_array($this->contents)) {
            Model::validateArray($this->contents);
        }
        if (\is_array($this->tools)) {
            Model::validateArray($this->tools);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contents) {
            if (\is_array($this->contents)) {
                $res['contents'] = [];
                $n1 = 0;
                foreach ($this->contents as $item1) {
                    $res['contents'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->messageId) {
            $res['messageId'] = $this->messageId;
        }

        if (null !== $this->role) {
            $res['role'] = $this->role;
        }

        if (null !== $this->tools) {
            if (\is_array($this->tools)) {
                $res['tools'] = [];
                $n1 = 0;
                foreach ($this->tools as $item1) {
                    if (\is_array($item1)) {
                        $res['tools'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['tools'][$n1][$key2] = $value2;
                        }
                    }
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
        if (isset($map['contents'])) {
            if (!empty($map['contents'])) {
                $model->contents = [];
                $n1 = 0;
                foreach ($map['contents'] as $item1) {
                    $model->contents[$n1] = contents::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['messageId'])) {
            $model->messageId = $map['messageId'];
        }

        if (isset($map['role'])) {
            $model->role = $map['role'];
        }

        if (isset($map['tools'])) {
            if (!empty($map['tools'])) {
                $model->tools = [];
                $n1 = 0;
                foreach ($map['tools'] as $item1) {
                    if (!empty($item1)) {
                        $model->tools[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->tools[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
