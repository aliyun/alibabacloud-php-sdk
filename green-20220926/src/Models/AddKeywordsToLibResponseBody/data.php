<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\AddKeywordsToLibResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220926\Models\AddKeywordsToLibResponseBody\data\keywordsResult;

class data extends Model
{
    /**
     * @var keywordsResult
     */
    public $keywordsResult;

    /**
     * @var string
     */
    public $libId;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'keywordsResult' => 'KeywordsResult',
        'libId' => 'LibId',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        if (null !== $this->keywordsResult) {
            $this->keywordsResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keywordsResult) {
            $res['KeywordsResult'] = null !== $this->keywordsResult ? $this->keywordsResult->toArray($noStream) : $this->keywordsResult;
        }

        if (null !== $this->libId) {
            $res['LibId'] = $this->libId;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['KeywordsResult'])) {
            $model->keywordsResult = keywordsResult::fromMap($map['KeywordsResult']);
        }

        if (isset($map['LibId'])) {
            $model->libId = $map['LibId'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
