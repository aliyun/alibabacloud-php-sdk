<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ReplaceKnowledgeBaseAdminsResponseBody\creator;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ReplaceKnowledgeBaseAdminsResponseBody\effectiveApprovers;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ReplaceKnowledgeBaseAdminsResponseBody\principals;

class ReplaceKnowledgeBaseAdminsResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var creator
     */
    public $creator;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var effectiveApprovers[]
     */
    public $effectiveApprovers;

    /**
     * @var string
     */
    public $message;

    /**
     * @var principals[]
     */
    public $principals;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code' => 'code',
        'creator' => 'creator',
        'directoryId' => 'directoryId',
        'effectiveApprovers' => 'effectiveApprovers',
        'message' => 'message',
        'principals' => 'principals',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (null !== $this->creator) {
            $this->creator->validate();
        }
        if (\is_array($this->effectiveApprovers)) {
            Model::validateArray($this->effectiveApprovers);
        }
        if (\is_array($this->principals)) {
            Model::validateArray($this->principals);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->creator) {
            $res['creator'] = null !== $this->creator ? $this->creator->toArray($noStream) : $this->creator;
        }

        if (null !== $this->directoryId) {
            $res['directoryId'] = $this->directoryId;
        }

        if (null !== $this->effectiveApprovers) {
            if (\is_array($this->effectiveApprovers)) {
                $res['effectiveApprovers'] = [];
                $n1 = 0;
                foreach ($this->effectiveApprovers as $item1) {
                    $res['effectiveApprovers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->principals) {
            if (\is_array($this->principals)) {
                $res['principals'] = [];
                $n1 = 0;
                foreach ($this->principals as $item1) {
                    $res['principals'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['creator'])) {
            $model->creator = creator::fromMap($map['creator']);
        }

        if (isset($map['directoryId'])) {
            $model->directoryId = $map['directoryId'];
        }

        if (isset($map['effectiveApprovers'])) {
            if (!empty($map['effectiveApprovers'])) {
                $model->effectiveApprovers = [];
                $n1 = 0;
                foreach ($map['effectiveApprovers'] as $item1) {
                    $model->effectiveApprovers[$n1] = effectiveApprovers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['principals'])) {
            if (!empty($map['principals'])) {
                $model->principals = [];
                $n1 = 0;
                foreach ($map['principals'] as $item1) {
                    $model->principals[$n1] = principals::fromMap($item1);
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
