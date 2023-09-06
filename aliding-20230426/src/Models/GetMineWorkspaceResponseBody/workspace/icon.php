<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetMineWorkspaceResponseBody\workspace;

use AlibabaCloud\Tea\Model;

class icon extends Model
{
    /**
     * @example URL
     *
     * @var string
     */
    public $type;

    /**
     * @example https://example/file-manage-files/zh-CN/202***13/ldet/avatar3.jpg
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'type'  => 'Type',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return icon
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
