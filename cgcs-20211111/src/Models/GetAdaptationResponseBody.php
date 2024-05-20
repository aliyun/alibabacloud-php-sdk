<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\SDK\CGCS\V20211111\Models\GetAdaptationResponseBody\adaptTarget;
use AlibabaCloud\Tea\Model;

class GetAdaptationResponseBody extends Model
{
    /**
     * @example 5435****
     *
     * @var int
     */
    public $adaptApplyId;

    /**
     * @var adaptTarget
     */
    public $adaptTarget;

    /**
     * @example 4384****
     *
     * @var string
     */
    public $appId;

    /**
     * @example 1432****
     *
     * @var string
     */
    public $appVersionId;

    /**
     * @example 2022-04-06 02:00:00
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2022-04-06 02:00:00
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 46329898-489C-4E63-9BA1-C1DA5C5D0986
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'adaptApplyId' => 'AdaptApplyId',
        'adaptTarget'  => 'AdaptTarget',
        'appId'        => 'AppId',
        'appVersionId' => 'AppVersionId',
        'gmtCreate'    => 'GmtCreate',
        'gmtModified'  => 'GmtModified',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adaptApplyId) {
            $res['AdaptApplyId'] = $this->adaptApplyId;
        }
        if (null !== $this->adaptTarget) {
            $res['AdaptTarget'] = null !== $this->adaptTarget ? $this->adaptTarget->toMap() : null;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appVersionId) {
            $res['AppVersionId'] = $this->appVersionId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAdaptationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdaptApplyId'])) {
            $model->adaptApplyId = $map['AdaptApplyId'];
        }
        if (isset($map['AdaptTarget'])) {
            $model->adaptTarget = adaptTarget::fromMap($map['AdaptTarget']);
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppVersionId'])) {
            $model->appVersionId = $map['AppVersionId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
