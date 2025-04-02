<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIPodcast\V20250228\Models;

use AlibabaCloud\Dara\Model;

class PodcastTaskSubmitRequest extends Model
{
    /**
     * @var int
     */
    public $counts;

    /**
     * @var string[]
     */
    public $fileUrls;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $topic;

    /**
     * @var string[]
     */
    public $voices;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'counts' => 'counts',
        'fileUrls' => 'fileUrls',
        'text' => 'text',
        'topic' => 'topic',
        'voices' => 'voices',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->fileUrls)) {
            Model::validateArray($this->fileUrls);
        }
        if (\is_array($this->voices)) {
            Model::validateArray($this->voices);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->counts) {
            $res['counts'] = $this->counts;
        }

        if (null !== $this->fileUrls) {
            if (\is_array($this->fileUrls)) {
                $res['fileUrls'] = [];
                $n1 = 0;
                foreach ($this->fileUrls as $item1) {
                    $res['fileUrls'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->text) {
            $res['text'] = $this->text;
        }

        if (null !== $this->topic) {
            $res['topic'] = $this->topic;
        }

        if (null !== $this->voices) {
            if (\is_array($this->voices)) {
                $res['voices'] = [];
                $n1 = 0;
                foreach ($this->voices as $item1) {
                    $res['voices'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
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
        if (isset($map['counts'])) {
            $model->counts = $map['counts'];
        }

        if (isset($map['fileUrls'])) {
            if (!empty($map['fileUrls'])) {
                $model->fileUrls = [];
                $n1 = 0;
                foreach ($map['fileUrls'] as $item1) {
                    $model->fileUrls[$n1++] = $item1;
                }
            }
        }

        if (isset($map['text'])) {
            $model->text = $map['text'];
        }

        if (isset($map['topic'])) {
            $model->topic = $map['topic'];
        }

        if (isset($map['voices'])) {
            if (!empty($map['voices'])) {
                $model->voices = [];
                $n1 = 0;
                foreach ($map['voices'] as $item1) {
                    $model->voices[$n1++] = $item1;
                }
            }
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
