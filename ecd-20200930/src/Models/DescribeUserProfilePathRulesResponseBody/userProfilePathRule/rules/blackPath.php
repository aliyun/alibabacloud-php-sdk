<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUserProfilePathRulesResponseBody\userProfilePathRule\rules;

use AlibabaCloud\Tea\Model;

class blackPath extends Model
{
    /**
     * @description The path.
     *
     * @example AppLocal/Data
     *
     * @var string
     */
    public $path;

    /**
     * @description The path type.
     *
     * Valid values:
     *
     *   file
     *
     * <!-- -->
     *
     *   folder
     *
     * <!-- -->
     * @example file
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'path' => 'Path',
        'type' => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return blackPath
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
