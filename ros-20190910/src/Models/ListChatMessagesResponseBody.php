<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;

class ListChatMessagesResponseBody extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var mixed[][]
     */
    public $messages;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $pipelineSnapshotDownloadUrl;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sessionMessagesDownloadUrl;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'messages' => 'Messages',
        'nextToken' => 'NextToken',
        'pipelineSnapshotDownloadUrl' => 'PipelineSnapshotDownloadUrl',
        'requestId' => 'RequestId',
        'sessionMessagesDownloadUrl' => 'SessionMessagesDownloadUrl',
        'title' => 'Title',
    ];

    public function validate()
    {
        if (\is_array($this->messages)) {
            Model::validateArray($this->messages);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->messages) {
            if (\is_array($this->messages)) {
                $res['Messages'] = [];
                $n1 = 0;
                foreach ($this->messages as $item1) {
                    if (\is_array($item1)) {
                        $res['Messages'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['Messages'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->pipelineSnapshotDownloadUrl) {
            $res['PipelineSnapshotDownloadUrl'] = $this->pipelineSnapshotDownloadUrl;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sessionMessagesDownloadUrl) {
            $res['SessionMessagesDownloadUrl'] = $this->sessionMessagesDownloadUrl;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['Messages'])) {
            if (!empty($map['Messages'])) {
                $model->messages = [];
                $n1 = 0;
                foreach ($map['Messages'] as $item1) {
                    if (!empty($item1)) {
                        $model->messages[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->messages[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['PipelineSnapshotDownloadUrl'])) {
            $model->pipelineSnapshotDownloadUrl = $map['PipelineSnapshotDownloadUrl'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SessionMessagesDownloadUrl'])) {
            $model->sessionMessagesDownloadUrl = $map['SessionMessagesDownloadUrl'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
