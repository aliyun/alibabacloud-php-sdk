<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ReportChannelPublishResultResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var string
     */
    public $articleStatus;

    /**
     * @var string
     */
    public $draftId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'articleStatus' => 'ArticleStatus',
        'draftId' => 'DraftId',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->articleStatus) {
            $res['ArticleStatus'] = $this->articleStatus;
        }

        if (null !== $this->draftId) {
            $res['DraftId'] = $this->draftId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ArticleStatus'])) {
            $model->articleStatus = $map['ArticleStatus'];
        }

        if (isset($map['DraftId'])) {
            $model->draftId = $map['DraftId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
