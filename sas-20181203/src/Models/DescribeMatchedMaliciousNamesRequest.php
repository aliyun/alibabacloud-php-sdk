<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeMatchedMaliciousNamesRequest extends Model
{
    /**
     * @description 设置请求和接收消息的语言类型，默认为**zh**。取值：
     *
     * - **zh**：中文
     * - **en**：英文
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description 要查询的镜像恶意样本的危险程度。可输入多个值，多个值之间使用英文逗号（,）分隔。取值：
     * - **serious**：紧急
     * - **suspicious**：可疑
     * - **remind**：提醒
     * @example serious
     *
     * @var string
     */
    public $levels;
    protected $_name = [
        'lang'   => 'Lang',
        'levels' => 'Levels',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->levels) {
            $res['Levels'] = $this->levels;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMatchedMaliciousNamesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Levels'])) {
            $model->levels = $map['Levels'];
        }

        return $model;
    }
}
