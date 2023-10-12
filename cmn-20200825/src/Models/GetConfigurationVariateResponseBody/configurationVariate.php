<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\GetConfigurationVariateResponseBody;

use AlibabaCloud\Tea\Model;

class configurationVariate extends Model
{
    /**
     * @example 项目信息
     *
     * @var string
     */
    public $comment;

    /**
     * @example def main():
     *
     * @var string
     */
    public $formatFunction;

    /**
     * @example 变量名字
     *
     * @var string
     */
    public $variateName;
    protected $_name = [
        'comment'        => 'Comment',
        'formatFunction' => 'FormatFunction',
        'variateName'    => 'VariateName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->formatFunction) {
            $res['FormatFunction'] = $this->formatFunction;
        }
        if (null !== $this->variateName) {
            $res['VariateName'] = $this->variateName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configurationVariate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['FormatFunction'])) {
            $model->formatFunction = $map['FormatFunction'];
        }
        if (isset($map['VariateName'])) {
            $model->variateName = $map['VariateName'];
        }

        return $model;
    }
}
