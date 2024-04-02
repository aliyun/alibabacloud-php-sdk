<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models\DescribeAuditContentResponseBody;

use AlibabaCloud\SDK\Green\V20170823\Models\DescribeAuditContentResponseBody\auditContentList\frameResults;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeAuditContentResponseBody\auditContentList\results;
use AlibabaCloud\Tea\Model;

class auditContentList extends Model
{
    /**
     * @var int
     */
    public $audit;

    /**
     * @var string[]
     */
    public $auditIllegalReasons;

    /**
     * @var string
     */
    public $auditResult;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $dataId;

    /**
     * @var frameResults[]
     */
    public $frameResults;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $newUrl;

    /**
     * @var string
     */
    public $requestTime;

    /**
     * @var results[]
     */
    public $results;

    /**
     * @var string
     */
    public $scanFinishedTime;

    /**
     * @var string
     */
    public $suggestion;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $thumbnail;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'audit'               => 'Audit',
        'auditIllegalReasons' => 'AuditIllegalReasons',
        'auditResult'         => 'AuditResult',
        'bizType'             => 'BizType',
        'content'             => 'Content',
        'dataId'              => 'DataId',
        'frameResults'        => 'FrameResults',
        'id'                  => 'Id',
        'newUrl'              => 'NewUrl',
        'requestTime'         => 'RequestTime',
        'results'             => 'Results',
        'scanFinishedTime'    => 'ScanFinishedTime',
        'suggestion'          => 'Suggestion',
        'taskId'              => 'TaskId',
        'thumbnail'           => 'Thumbnail',
        'url'                 => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audit) {
            $res['Audit'] = $this->audit;
        }
        if (null !== $this->auditIllegalReasons) {
            $res['AuditIllegalReasons'] = $this->auditIllegalReasons;
        }
        if (null !== $this->auditResult) {
            $res['AuditResult'] = $this->auditResult;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->frameResults) {
            $res['FrameResults'] = [];
            if (null !== $this->frameResults && \is_array($this->frameResults)) {
                $n = 0;
                foreach ($this->frameResults as $item) {
                    $res['FrameResults'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->newUrl) {
            $res['NewUrl'] = $this->newUrl;
        }
        if (null !== $this->requestTime) {
            $res['RequestTime'] = $this->requestTime;
        }
        if (null !== $this->results) {
            $res['Results'] = [];
            if (null !== $this->results && \is_array($this->results)) {
                $n = 0;
                foreach ($this->results as $item) {
                    $res['Results'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->scanFinishedTime) {
            $res['ScanFinishedTime'] = $this->scanFinishedTime;
        }
        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->thumbnail) {
            $res['Thumbnail'] = $this->thumbnail;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return auditContentList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Audit'])) {
            $model->audit = $map['Audit'];
        }
        if (isset($map['AuditIllegalReasons'])) {
            if (!empty($map['AuditIllegalReasons'])) {
                $model->auditIllegalReasons = $map['AuditIllegalReasons'];
            }
        }
        if (isset($map['AuditResult'])) {
            $model->auditResult = $map['AuditResult'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['FrameResults'])) {
            if (!empty($map['FrameResults'])) {
                $model->frameResults = [];
                $n                   = 0;
                foreach ($map['FrameResults'] as $item) {
                    $model->frameResults[$n++] = null !== $item ? frameResults::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['NewUrl'])) {
            $model->newUrl = $map['NewUrl'];
        }
        if (isset($map['RequestTime'])) {
            $model->requestTime = $map['RequestTime'];
        }
        if (isset($map['Results'])) {
            if (!empty($map['Results'])) {
                $model->results = [];
                $n              = 0;
                foreach ($map['Results'] as $item) {
                    $model->results[$n++] = null !== $item ? results::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ScanFinishedTime'])) {
            $model->scanFinishedTime = $map['ScanFinishedTime'];
        }
        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Thumbnail'])) {
            $model->thumbnail = $map['Thumbnail'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
