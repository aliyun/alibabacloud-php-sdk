<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantBookDirectoriesResponseBody\data;

use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantBookDirectoriesResponseBody\data\directoryTree\topic;
use AlibabaCloud\Tea\Model;

class directoryTree extends Model
{
    /**
     * @example 05758807ed8e11eebe6e0c42a106bb02
     *
     * @var string
     */
    public $directoryId;

    /**
     * @example 2 Jobs
     *
     * @var string
     */
    public $directoryName;

    /**
     * @var topic[]
     */
    public $topic;
    protected $_name = [
        'directoryId'   => 'directoryId',
        'directoryName' => 'directoryName',
        'topic'         => 'topic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->directoryId) {
            $res['directoryId'] = $this->directoryId;
        }
        if (null !== $this->directoryName) {
            $res['directoryName'] = $this->directoryName;
        }
        if (null !== $this->topic) {
            $res['topic'] = [];
            if (null !== $this->topic && \is_array($this->topic)) {
                $n = 0;
                foreach ($this->topic as $item) {
                    $res['topic'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return directoryTree
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['directoryId'])) {
            $model->directoryId = $map['directoryId'];
        }
        if (isset($map['directoryName'])) {
            $model->directoryName = $map['directoryName'];
        }
        if (isset($map['topic'])) {
            if (!empty($map['topic'])) {
                $model->topic = [];
                $n            = 0;
                foreach ($map['topic'] as $item) {
                    $model->topic[$n++] = null !== $item ? topic::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
