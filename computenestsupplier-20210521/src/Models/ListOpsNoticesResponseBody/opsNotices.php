<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListOpsNoticesResponseBody;

use AlibabaCloud\Dara\Model;

class opsNotices extends Model
{
    /**
     * @var string
     */
    public $attributes;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $noticeId;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string[]
     */
    public $serviceVersions;

    /**
     * @var string
     */
    public $severity;

    /**
     * @var string
     */
    public $solutions;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $success;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'attributes' => 'Attributes',
        'category' => 'Category',
        'content' => 'Content',
        'noticeId' => 'NoticeId',
        'serviceId' => 'ServiceId',
        'serviceName' => 'ServiceName',
        'serviceVersions' => 'ServiceVersions',
        'severity' => 'Severity',
        'solutions' => 'Solutions',
        'startTime' => 'StartTime',
        'success' => 'Success',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->serviceVersions)) {
            Model::validateArray($this->serviceVersions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributes) {
            $res['Attributes'] = $this->attributes;
        }

        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->noticeId) {
            $res['NoticeId'] = $this->noticeId;
        }

        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        if (null !== $this->serviceVersions) {
            if (\is_array($this->serviceVersions)) {
                $res['ServiceVersions'] = [];
                $n1 = 0;
                foreach ($this->serviceVersions as $item1) {
                    $res['ServiceVersions'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }

        if (null !== $this->solutions) {
            $res['Solutions'] = $this->solutions;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Attributes'])) {
            $model->attributes = $map['Attributes'];
        }

        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['NoticeId'])) {
            $model->noticeId = $map['NoticeId'];
        }

        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        if (isset($map['ServiceVersions'])) {
            if (!empty($map['ServiceVersions'])) {
                $model->serviceVersions = [];
                $n1 = 0;
                foreach ($map['ServiceVersions'] as $item1) {
                    $model->serviceVersions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }

        if (isset($map['Solutions'])) {
            $model->solutions = $map['Solutions'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
