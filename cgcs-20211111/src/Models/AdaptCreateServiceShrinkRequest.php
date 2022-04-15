<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\Tea\Model;

class AdaptCreateServiceShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $adaptTargetShrink;

    /**
     * @var string
     */
    public $appVersionId;

    /**
     * @var string
     */
    public $appVersionName;

    /**
     * @var string
     */
    public $requestApp;
    protected $_name = [
        'adaptTargetShrink' => 'AdaptTarget',
        'appVersionId'      => 'AppVersionId',
        'appVersionName'    => 'AppVersionName',
        'requestApp'        => 'RequestApp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adaptTargetShrink) {
            $res['AdaptTarget'] = $this->adaptTargetShrink;
        }
        if (null !== $this->appVersionId) {
            $res['AppVersionId'] = $this->appVersionId;
        }
        if (null !== $this->appVersionName) {
            $res['AppVersionName'] = $this->appVersionName;
        }
        if (null !== $this->requestApp) {
            $res['RequestApp'] = $this->requestApp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AdaptCreateServiceShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdaptTarget'])) {
            $model->adaptTargetShrink = $map['AdaptTarget'];
        }
        if (isset($map['AppVersionId'])) {
            $model->appVersionId = $map['AppVersionId'];
        }
        if (isset($map['AppVersionName'])) {
            $model->appVersionName = $map['AppVersionName'];
        }
        if (isset($map['RequestApp'])) {
            $model->requestApp = $map['RequestApp'];
        }

        return $model;
    }
}
