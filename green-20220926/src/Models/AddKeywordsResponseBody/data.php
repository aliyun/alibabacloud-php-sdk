<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\AddKeywordsResponseBody;

use AlibabaCloud\SDK\Green\V20220926\Models\AddKeywordsResponseBody\data\keywordsResult;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var keywordsResult
     */
    public $keywordsResult;

    /**
     * @example customxx_xxxx
     *
     * @var string
     */
    public $libId;

    /**
     * @example xxxxx-xxxxx
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'keywordsResult' => 'KeywordsResult',
        'libId' => 'LibId',
        'taskId' => 'TaskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->keywordsResult) {
            $res['KeywordsResult'] = null !== $this->keywordsResult ? $this->keywordsResult->toMap() : null;
        }
        if (null !== $this->libId) {
            $res['LibId'] = $this->libId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
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
