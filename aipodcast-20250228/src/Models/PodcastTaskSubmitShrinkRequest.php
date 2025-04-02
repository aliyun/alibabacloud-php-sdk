<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIPodcast\V20250228\Models;

use AlibabaCloud\Dara\Model;

class PodcastTaskSubmitShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $counts;

    /**
     * @var string
     */
    public $fileUrlsShrink;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $topic;

    /**
     * @var string
     */
    public $voicesShrink;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'counts' => 'counts',
        'fileUrlsShrink' => 'fileUrls',
        'text' => 'text',
        'topic' => 'topic',
        'voicesShrink' => 'voices',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->counts) {
            $res['counts'] = $this->counts;
        }

        if (null !== $this->fileUrlsShrink) {
            $res['fileUrls'] = $this->fileUrlsShrink;
        }

        if (null !== $this->text) {
            $res['text'] = $this->text;
        }

        if (null !== $this->topic) {
            $res['topic'] = $this->topic;
        }

        if (null !== $this->voicesShrink) {
            $res['voices'] = $this->voicesShrink;
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
            $model->fileUrlsShrink = $map['fileUrls'];
        }

        if (isset($map['text'])) {
            $model->text = $map['text'];
        }

        if (isset($map['topic'])) {
            $model->topic = $map['topic'];
        }

        if (isset($map['voices'])) {
            $model->voicesShrink = $map['voices'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
