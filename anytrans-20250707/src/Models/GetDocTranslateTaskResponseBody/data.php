<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AnyTrans\V20250707\Models\GetDocTranslateTaskResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $charactersCount;

    /**
     * @var int
     */
    public $pageCount;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $translateFileUrl;
    protected $_name = [
        'charactersCount' => 'charactersCount',
        'pageCount' => 'pageCount',
        'status' => 'status',
        'taskId' => 'taskId',
        'translateFileUrl' => 'translateFileUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->charactersCount) {
            $res['charactersCount'] = $this->charactersCount;
        }

        if (null !== $this->pageCount) {
            $res['pageCount'] = $this->pageCount;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        if (null !== $this->translateFileUrl) {
            $res['translateFileUrl'] = $this->translateFileUrl;
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
        if (isset($map['charactersCount'])) {
            $model->charactersCount = $map['charactersCount'];
        }

        if (isset($map['pageCount'])) {
            $model->pageCount = $map['pageCount'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['translateFileUrl'])) {
            $model->translateFileUrl = $map['translateFileUrl'];
        }

        return $model;
    }
}
