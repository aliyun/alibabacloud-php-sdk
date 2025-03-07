<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ListSchemasResponseBody;

use AlibabaCloud\Tea\Model;

class schemas extends Model
{
    /**
     * @var string[]
     */
    public $schemas;
    protected $_name = [
        'schemas' => 'Schemas',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->schemas) {
            $res['Schemas'] = $this->schemas;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return schemas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Schemas'])) {
            if (!empty($map['Schemas'])) {
                $model->schemas = $map['Schemas'];
            }
        }

        return $model;
    }
}
