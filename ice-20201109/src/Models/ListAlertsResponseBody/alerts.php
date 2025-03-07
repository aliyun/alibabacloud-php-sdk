<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListAlertsResponseBody;

use AlibabaCloud\Tea\Model;

class alerts extends Model
{
    /**
     * @description The alert type.
     *
     * @var string
     */
    public $category;

    /**
     * @description The error code.
     *
     * @example ScheduleError
     *
     * @var string
     */
    public $code;

    /**
     * @description The time when the alert was received in UTC.
     *
     * @example 2024-07-16T10:03Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the alert was modified in UTC.
     *
     * @example 2024-07-16T10:03Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The error message.
     *
     * @example xxxxx
     *
     * @var string
     */
    public $message;

    /**
     * @description The ARN of the related resource.
     *
     * @example acs:ims:mediaweaver:<regionId>:<userId>:vodSource/mySourceLocation/MySource
     *
     * @var string
     */
    public $relatedResourceArns;

    /**
     * @description The ARN of the resource.
     *
     * @example acs:ims:mediaweaver:<regionId>:<userId>:vodSource/mySourceLocation/MySource
     *
     * @var string
     */
    public $resourceArn;
    protected $_name = [
        'category'            => 'Category',
        'code'                => 'Code',
        'gmtCreate'           => 'GmtCreate',
        'gmtModified'         => 'GmtModified',
        'message'             => 'Message',
        'relatedResourceArns' => 'RelatedResourceArns',
        'resourceArn'         => 'ResourceArn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->relatedResourceArns) {
            $res['RelatedResourceArns'] = $this->relatedResourceArns;
        }
        if (null !== $this->resourceArn) {
            $res['ResourceArn'] = $this->resourceArn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alerts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RelatedResourceArns'])) {
            $model->relatedResourceArns = $map['RelatedResourceArns'];
        }
        if (isset($map['ResourceArn'])) {
            $model->resourceArn = $map['ResourceArn'];
        }

        return $model;
    }
}
