<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class ListKnowledgeBaseDirectoriesResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var mixed[]
     */
    public $directories;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'code' => 'code',
        'directories' => 'directories',
        'message' => 'message',
        'requestId' => 'requestId',
        'totalCount' => 'totalCount',
    ];

    public function validate()
    {
        if (\is_array($this->directories)) {
            Model::validateArray($this->directories);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->directories) {
            if (\is_array($this->directories)) {
                $res['directories'] = [];
                $n1 = 0;
                foreach ($this->directories as $item1) {
                    $res['directories'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
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

        if (isset($map['directories'])) {
            if (!empty($map['directories'])) {
                $model->directories = [];
                $n1 = 0;
                foreach ($map['directories'] as $item1) {
                    $model->directories[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
