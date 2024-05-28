<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreateProtectdBranchResponseBody\result\testSettingDTO;

use AlibabaCloud\Tea\Model;

class sensitiveInfoDetection extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $enabled;

    /**
     * @example test_code_sensitive_info
     *
     * @var string
     */
    public $message;
    protected $_name = [
        'enabled' => 'enabled',
        'message' => 'message',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sensitiveInfoDetection
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        return $model;
    }
}
