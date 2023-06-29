<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class DisableUserConfigRequest extends Model
{
    /**
     * @description The code of the configuration item. You can call the [DescribeConfigs](~~DescribeConfigs~~) operation to obtain the code of the configuration item.
     *
     * @example access_failed_cnt
     *
     * @var string
     */
    public $code;

    /**
     * @description The language of the content within the request and response. Valid values:
     *
     *   **zh_cn**: Chinese (default)
     *   **en_us**: English
     *
     * @example zh_cn
     *
     * @var string
     */
    public $lang;
    protected $_name = [
        'code' => 'Code',
        'lang' => 'Lang',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DisableUserConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        return $model;
    }
}
