<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduEmbed\V20240101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EduEmbed\V20240101\Models\PageListLabSessionsResponseBody\labSessions;

class PageListLabSessionsResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var labSessions[]
     */
    public $labSessions;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'code' => 'Code',
        'labSessions' => 'LabSessions',
        'message' => 'Message',
        'page' => 'Page',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->labSessions)) {
            Model::validateArray($this->labSessions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->labSessions) {
            if (\is_array($this->labSessions)) {
                $res['LabSessions'] = [];
                $n1 = 0;
                foreach ($this->labSessions as $item1) {
                    $res['LabSessions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['LabSessions'])) {
            if (!empty($map['LabSessions'])) {
                $model->labSessions = [];
                $n1 = 0;
                foreach ($map['LabSessions'] as $item1) {
                    $model->labSessions[$n1++] = labSessions::fromMap($item1);
                }
            }
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
