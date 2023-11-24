<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateSortScriptResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 脚本的作用范围
     *
     * @example second_rank
     *
     * @var string
     */
    public $scope;

    /**
     * @description 脚本名称
     *
     * @example rank_cava_20230606_v7
     *
     * @var string
     */
    public $scriptName;

    /**
     * @description 脚本的类型
     *
     * @example cava_script
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'scope'      => 'scope',
        'scriptName' => 'scriptName',
        'type'       => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }
        if (null !== $this->scriptName) {
            $res['scriptName'] = $this->scriptName;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }
        if (isset($map['scriptName'])) {
            $model->scriptName = $map['scriptName'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
