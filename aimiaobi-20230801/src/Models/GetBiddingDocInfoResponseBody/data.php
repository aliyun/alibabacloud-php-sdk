<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetBiddingDocInfoResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $contentFormat;

    /**
     * @var string
     */
    public $contentType;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $step;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $tenderDocUrl;

    /**
     * @var string
     */
    public $tenderFileType;
    protected $_name = [
        'content' => 'Content',
        'contentFormat' => 'ContentFormat',
        'contentType' => 'ContentType',
        'status' => 'Status',
        'step' => 'Step',
        'taskId' => 'TaskId',
        'tenderDocUrl' => 'TenderDocUrl',
        'tenderFileType' => 'TenderFileType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->contentFormat) {
            $res['ContentFormat'] = $this->contentFormat;
        }

        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->step) {
            $res['Step'] = $this->step;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->tenderDocUrl) {
            $res['TenderDocUrl'] = $this->tenderDocUrl;
        }

        if (null !== $this->tenderFileType) {
            $res['TenderFileType'] = $this->tenderFileType;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['ContentFormat'])) {
            $model->contentFormat = $map['ContentFormat'];
        }

        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Step'])) {
            $model->step = $map['Step'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TenderDocUrl'])) {
            $model->tenderDocUrl = $map['TenderDocUrl'];
        }

        if (isset($map['TenderFileType'])) {
            $model->tenderFileType = $map['TenderFileType'];
        }

        return $model;
    }
}
