<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class CreateSortScriptRequest extends Model
{
    /**
     * @description The sort phase to which the script applies.
     *
     * @example second_rank
     *
     * @var string
     */
    public $scope;

    /**
     * @description The script name.
     *
     * @example rank_cava_20230606_v7
     *
     * @var string
     */
    public $scriptName;

    /**
     * @description The script type. Set the value to cava_script.
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
     * @return CreateSortScriptRequest
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
