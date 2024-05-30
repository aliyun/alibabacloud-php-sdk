<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\ListChatappTemplateRequest;

use AlibabaCloud\Tea\Model;

class page extends Model
{
    /**
     * @description The page number. Default value: 1.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $index;

    /**
     * @description The number of entries per page. Default value: 10.
     *
     * This parameter is required.
     * @example 10
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'index' => 'Index',
        'size'  => 'Size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return page
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
