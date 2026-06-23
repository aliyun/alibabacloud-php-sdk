<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetRoutineCodeVersionInfoResponseBody\confOptions;

class GetRoutineCodeVersionInfoResponseBody extends Model
{
    /**
     * @var int
     */
    public $buildId;

    /**
     * @var string
     */
    public $codeDescription;

    /**
     * @var string
     */
    public $codeVersion;

    /**
     * @var confOptions
     */
    public $confOptions;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $extraInfo;

    /**
     * @var bool
     */
    public $hasAssets;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'buildId' => 'BuildId',
        'codeDescription' => 'CodeDescription',
        'codeVersion' => 'CodeVersion',
        'confOptions' => 'ConfOptions',
        'createTime' => 'CreateTime',
        'extraInfo' => 'ExtraInfo',
        'hasAssets' => 'HasAssets',
        'requestId' => 'RequestId',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->confOptions) {
            $this->confOptions->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->buildId) {
            $res['BuildId'] = $this->buildId;
        }

        if (null !== $this->codeDescription) {
            $res['CodeDescription'] = $this->codeDescription;
        }

        if (null !== $this->codeVersion) {
            $res['CodeVersion'] = $this->codeVersion;
        }

        if (null !== $this->confOptions) {
            $res['ConfOptions'] = null !== $this->confOptions ? $this->confOptions->toArray($noStream) : $this->confOptions;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->extraInfo) {
            $res['ExtraInfo'] = $this->extraInfo;
        }

        if (null !== $this->hasAssets) {
            $res['HasAssets'] = $this->hasAssets;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['BuildId'])) {
            $model->buildId = $map['BuildId'];
        }

        if (isset($map['CodeDescription'])) {
            $model->codeDescription = $map['CodeDescription'];
        }

        if (isset($map['CodeVersion'])) {
            $model->codeVersion = $map['CodeVersion'];
        }

        if (isset($map['ConfOptions'])) {
            $model->confOptions = confOptions::fromMap($map['ConfOptions']);
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['ExtraInfo'])) {
            $model->extraInfo = $map['ExtraInfo'];
        }

        if (isset($map['HasAssets'])) {
            $model->hasAssets = $map['HasAssets'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
