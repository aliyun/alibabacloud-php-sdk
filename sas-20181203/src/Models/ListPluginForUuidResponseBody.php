<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListPluginForUuidResponseBody\aegisUuidTargetPluginConfigList;

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
        'code' => 'Code',
        'message' => 'Message',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->aegisUuidTargetPluginConfigList)) {
            Model::validateArray($this->aegisUuidTargetPluginConfigList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aegisUuidTargetPluginConfigList) {
            if (\is_array($this->aegisUuidTargetPluginConfigList)) {
                $res['AegisUuidTargetPluginConfigList'] = [];
                $n1 = 0;
                foreach ($this->aegisUuidTargetPluginConfigList as $item1) {
                    $res['AegisUuidTargetPluginConfigList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AegisUuidTargetPluginConfigList'])) {
            if (!empty($map['AegisUuidTargetPluginConfigList'])) {
                $model->aegisUuidTargetPluginConfigList = [];
                $n1 = 0;
                foreach ($map['AegisUuidTargetPluginConfigList'] as $item1) {
                    $model->aegisUuidTargetPluginConfigList[$n1] = aegisUuidTargetPluginConfigList::fromMap($item1);
                    ++$n1;
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
