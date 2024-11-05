<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnTypesResponseBody\cdnTypes;

use AlibabaCloud\Tea\Model;

class cdnType extends Model
{
    /**
     * @example Download Acceleration
     *
     * @var string
     */
    public $desc;

    /**
     * @example download
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'desc' => 'Desc',
        'type' => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cdnType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
