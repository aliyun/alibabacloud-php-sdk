<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\CreateSiteMonitorResponseBody;

use AlibabaCloud\SDK\Cms\V20190101\Models\CreateSiteMonitorResponseBody\data\attachAlertResult;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The result that is returned after you associate the existing alert rule with the site monitoring task.
     *
     * @var attachAlertResult
     */
    public $attachAlertResult;
    protected $_name = [
        'attachAlertResult' => 'AttachAlertResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attachAlertResult) {
            $res['AttachAlertResult'] = null !== $this->attachAlertResult ? $this->attachAlertResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttachAlertResult'])) {
            $model->attachAlertResult = attachAlertResult::fromMap($map['AttachAlertResult']);
        }

        return $model;
    }
}
