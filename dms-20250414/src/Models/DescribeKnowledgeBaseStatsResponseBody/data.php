<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\DescribeKnowledgeBaseStatsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $documentCount;

    /**
     * @var int
     */
    public $kbHits;

    /**
     * @var string
     */
    public $kbUuid;

    /**
     * @var int
     */
    public $totalChunkCount;

    /**
     * @var int
     */
    public $totalFileSize;
    protected $_name = [
        'documentCount' => 'DocumentCount',
        'kbHits' => 'KbHits',
        'kbUuid' => 'KbUuid',
        'totalChunkCount' => 'TotalChunkCount',
        'totalFileSize' => 'TotalFileSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->documentCount) {
            $res['DocumentCount'] = $this->documentCount;
        }

        if (null !== $this->kbHits) {
            $res['KbHits'] = $this->kbHits;
        }

        if (null !== $this->kbUuid) {
            $res['KbUuid'] = $this->kbUuid;
        }

        if (null !== $this->totalChunkCount) {
            $res['TotalChunkCount'] = $this->totalChunkCount;
        }

        if (null !== $this->totalFileSize) {
            $res['TotalFileSize'] = $this->totalFileSize;
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
        if (isset($map['DocumentCount'])) {
            $model->documentCount = $map['DocumentCount'];
        }

        if (isset($map['KbHits'])) {
            $model->kbHits = $map['KbHits'];
        }

        if (isset($map['KbUuid'])) {
            $model->kbUuid = $map['KbUuid'];
        }

        if (isset($map['TotalChunkCount'])) {
            $model->totalChunkCount = $map['TotalChunkCount'];
        }

        if (isset($map['TotalFileSize'])) {
            $model->totalFileSize = $map['TotalFileSize'];
        }

        return $model;
    }
}
