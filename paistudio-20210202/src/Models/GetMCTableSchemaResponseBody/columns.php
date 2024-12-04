<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models\GetMCTableSchemaResponseBody;

use AlibabaCloud\Tea\Model;

class columns extends Model
{
    /**
     * @example column1
     *
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $preview;

    /**
     * @example STRING
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'name'    => 'Name',
        'preview' => 'Preview',
        'type'    => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->preview) {
            $res['Preview'] = $this->preview;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return columns
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Preview'])) {
            if (!empty($map['Preview'])) {
                $model->preview = $map['Preview'];
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
