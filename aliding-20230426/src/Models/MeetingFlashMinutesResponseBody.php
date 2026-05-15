<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\MeetingFlashMinutesResponseBody\basicInfo;
use AlibabaCloud\SDK\Aliding\V20230426\Models\MeetingFlashMinutesResponseBody\todos;

class MeetingFlashMinutesResponseBody extends Model
{
    /**
     * @var basicInfo
     */
    public $basicInfo;

    /**
     * @var string
     */
    public $flashMinutesUrl;

    /**
     * @var string
     */
    public $fullSummary;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var todos
     */
    public $todos;

    /**
     * @var string
     */
    public $vendorRequestId;

    /**
     * @var string
     */
    public $vendorType;
    protected $_name = [
        'basicInfo' => 'basicInfo',
        'flashMinutesUrl' => 'flashMinutesUrl',
        'fullSummary' => 'fullSummary',
        'requestId' => 'requestId',
        'todos' => 'todos',
        'vendorRequestId' => 'vendorRequestId',
        'vendorType' => 'vendorType',
    ];

    public function validate()
    {
        if (null !== $this->basicInfo) {
            $this->basicInfo->validate();
        }
        if (null !== $this->todos) {
            $this->todos->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->basicInfo) {
            $res['basicInfo'] = null !== $this->basicInfo ? $this->basicInfo->toArray($noStream) : $this->basicInfo;
        }

        if (null !== $this->flashMinutesUrl) {
            $res['flashMinutesUrl'] = $this->flashMinutesUrl;
        }

        if (null !== $this->fullSummary) {
            $res['fullSummary'] = $this->fullSummary;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->todos) {
            $res['todos'] = null !== $this->todos ? $this->todos->toArray($noStream) : $this->todos;
        }

        if (null !== $this->vendorRequestId) {
            $res['vendorRequestId'] = $this->vendorRequestId;
        }

        if (null !== $this->vendorType) {
            $res['vendorType'] = $this->vendorType;
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
        if (isset($map['basicInfo'])) {
            $model->basicInfo = basicInfo::fromMap($map['basicInfo']);
        }

        if (isset($map['flashMinutesUrl'])) {
            $model->flashMinutesUrl = $map['flashMinutesUrl'];
        }

        if (isset($map['fullSummary'])) {
            $model->fullSummary = $map['fullSummary'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['todos'])) {
            $model->todos = todos::fromMap($map['todos']);
        }

        if (isset($map['vendorRequestId'])) {
            $model->vendorRequestId = $map['vendorRequestId'];
        }

        if (isset($map['vendorType'])) {
            $model->vendorType = $map['vendorType'];
        }

        return $model;
    }
}
