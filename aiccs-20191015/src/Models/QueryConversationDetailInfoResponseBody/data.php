<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryConversationDetailInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryConversationDetailInfoResponseBody\data\outputTags;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryConversationDetailInfoResponseBody\data\variables;

class data extends Model
{
    /**
     * @var string
     */
    public $conversationRecord;

    /**
     * @var outputTags[]
     */
    public $outputTags;

    /**
     * @var int
     */
    public $pickUpTime;

    /**
     * @var string
     */
    public $recordingFileDownloadUrl;

    /**
     * @var variables[]
     */
    public $variables;
    protected $_name = [
        'conversationRecord' => 'ConversationRecord',
        'outputTags' => 'OutputTags',
        'pickUpTime' => 'PickUpTime',
        'recordingFileDownloadUrl' => 'RecordingFileDownloadUrl',
        'variables' => 'Variables',
    ];

    public function validate()
    {
        if (\is_array($this->outputTags)) {
            Model::validateArray($this->outputTags);
        }
        if (\is_array($this->variables)) {
            Model::validateArray($this->variables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conversationRecord) {
            $res['ConversationRecord'] = $this->conversationRecord;
        }

        if (null !== $this->outputTags) {
            if (\is_array($this->outputTags)) {
                $res['OutputTags'] = [];
                $n1 = 0;
                foreach ($this->outputTags as $item1) {
                    $res['OutputTags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pickUpTime) {
            $res['PickUpTime'] = $this->pickUpTime;
        }

        if (null !== $this->recordingFileDownloadUrl) {
            $res['RecordingFileDownloadUrl'] = $this->recordingFileDownloadUrl;
        }

        if (null !== $this->variables) {
            if (\is_array($this->variables)) {
                $res['Variables'] = [];
                $n1 = 0;
                foreach ($this->variables as $item1) {
                    $res['Variables'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ConversationRecord'])) {
            $model->conversationRecord = $map['ConversationRecord'];
        }

        if (isset($map['OutputTags'])) {
            if (!empty($map['OutputTags'])) {
                $model->outputTags = [];
                $n1 = 0;
                foreach ($map['OutputTags'] as $item1) {
                    $model->outputTags[$n1] = outputTags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PickUpTime'])) {
            $model->pickUpTime = $map['PickUpTime'];
        }

        if (isset($map['RecordingFileDownloadUrl'])) {
            $model->recordingFileDownloadUrl = $map['RecordingFileDownloadUrl'];
        }

        if (isset($map['Variables'])) {
            if (!empty($map['Variables'])) {
                $model->variables = [];
                $n1 = 0;
                foreach ($map['Variables'] as $item1) {
                    $model->variables[$n1] = variables::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
