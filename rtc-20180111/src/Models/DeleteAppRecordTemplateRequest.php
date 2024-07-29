<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DeleteAppRecordTemplateRequest\template;
use AlibabaCloud\Tea\Model;

class DeleteAppRecordTemplateRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example ac7N****
     *
     * @var string
     */
    public $appId;

    /**
     * @example 53200b81-b761-4c10-842a-a0726d97xxxx
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description This parameter is required.
     *
     * @var template
     */
    public $template;
    protected $_name = [
        'appId'       => 'AppId',
        'clientToken' => 'ClientToken',
        'template'    => 'Template',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->template) {
            $res['Template'] = null !== $this->template ? $this->template->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAppRecordTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Template'])) {
            $model->template = template::fromMap($map['Template']);
        }

        return $model;
    }
}
