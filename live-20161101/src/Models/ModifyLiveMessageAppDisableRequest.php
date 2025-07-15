<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class ModifyLiveMessageAppDisableRequest extends Model
{
    /**
     * @description The ID of the interactive messaging application.
     *
     * This parameter is required.
     *
     * @example ab6b5740****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The data center. It must be the same as the data center that was specified when you called the [CreateLiveMessageApp](https://help.aliyun.com/document_detail/2848162.html) operation to create the interactive messaging application. Valid values: cn-shanghai and ap-southeast-1 (Singapore).
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $dataCenter;

    /**
     * @description Specifies whether to disable the interactive messaging application.
     *
     * @example true
     *
     * @var bool
     */
    public $disable;
    protected $_name = [
        'appId' => 'AppId',
        'dataCenter' => 'DataCenter',
        'disable' => 'Disable',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->dataCenter) {
            $res['DataCenter'] = $this->dataCenter;
        }
        if (null !== $this->disable) {
            $res['Disable'] = $this->disable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyLiveMessageAppDisableRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['DataCenter'])) {
            $model->dataCenter = $map['DataCenter'];
        }
        if (isset($map['Disable'])) {
            $model->disable = $map['Disable'];
        }

        return $model;
    }
}
