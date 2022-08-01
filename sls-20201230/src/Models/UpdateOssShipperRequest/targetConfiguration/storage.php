<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\UpdateOssShipperRequest\targetConfiguration;

use AlibabaCloud\Tea\Model;

class storage extends Model
{
    /**
     * @var mixed[]
     */
    public $detail;

    /**
     * @var string
     */
    public $format;
    protected $_name = [
        'detail' => 'detail',
        'format' => 'format',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detail) {
            $res['detail'] = $this->detail;
        }
        if (null !== $this->format) {
            $res['format'] = $this->format;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return storage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['detail'])) {
            $model->detail = $map['detail'];
        }
        if (isset($map['format'])) {
            $model->format = $map['format'];
        }

        return $model;
    }
}
