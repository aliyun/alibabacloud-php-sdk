<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListPluginForUuidResponseBody\aegisUuidTargetPluginConfigList;
use AlibabaCloud\Tea\Model;

class ListPluginForUuidResponseBody extends Model
{
    /**
     * @var aegisUuidTargetPluginConfigList[]
     */
    public $aegisUuidTargetPluginConfigList;

    /**
     * @var int
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'aegisUuidTargetPluginConfigList' => 'AegisUuidTargetPluginConfigList',
        'code'                            => 'Code',
        'message'                         => 'Message',
        'requestId'                       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aegisUuidTargetPluginConfigList) {
            $res['AegisUuidTargetPluginConfigList'] = [];
            if (null !== $this->aegisUuidTargetPluginConfigList && \is_array($this->aegisUuidTargetPluginConfigList)) {
                $n = 0;
                foreach ($this->aegisUuidTargetPluginConfigList as $item) {
                    $res['AegisUuidTargetPluginConfigList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPluginForUuidResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AegisUuidTargetPluginConfigList'])) {
            if (!empty($map['AegisUuidTargetPluginConfigList'])) {
                $model->aegisUuidTargetPluginConfigList = [];
                $n                                      = 0;
                foreach ($map['AegisUuidTargetPluginConfigList'] as $item) {
                    $model->aegisUuidTargetPluginConfigList[$n++] = null !== $item ? aegisUuidTargetPluginConfigList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
