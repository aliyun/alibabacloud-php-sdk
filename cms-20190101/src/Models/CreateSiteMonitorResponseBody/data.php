<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\CreateSiteMonitorResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateSiteMonitorResponseBody\data\attachAlertResult;

class data extends Model
{
    /**
     * @var attachAlertResult
     */
    public $attachAlertResult;
    protected $_name = [
        'attachAlertResult' => 'AttachAlertResult',
    ];

    public function validate()
    {
        if (null !== $this->attachAlertResult) {
            $this->attachAlertResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachAlertResult) {
            $res['AttachAlertResult'] = null !== $this->attachAlertResult ? $this->attachAlertResult->toArray($noStream) : $this->attachAlertResult;
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
        if (isset($map['AttachAlertResult'])) {
            $model->attachAlertResult = attachAlertResult::fromMap($map['AttachAlertResult']);
        }

        return $model;
    }
}
