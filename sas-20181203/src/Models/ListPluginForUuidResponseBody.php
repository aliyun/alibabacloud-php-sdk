<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListPluginForUuidResponseBody\aegisUuidTargetPluginConfigList;
use AlibabaCloud\Tea\Model;

class ListPluginForUuidResponseBody extends Model
{
    /**
     * @description The type of the plug-in. Valid values:
     *
     *   **auto_breaking**: antivirus
     *   **ransomware_breaking**: anti-ransomware (bait capture)
     *   **webshell_cloud_breaking**: webshell prevention
     *   **alisecguard**: client protection
     *   **alinet**: malicious behavior defense
     *
     * @var aegisUuidTargetPluginConfigList[]
     */
    public $aegisUuidTargetPluginConfigList;

    /**
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @description The status code returned. The status code **200** indicates that the request was successful. Other status codes indicate that the request failed. You can identify the cause of the failure based on the status code.
     *
     * @example 7E0618A9-D5EF-4220-9471-C42B5E92719F
     *
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
