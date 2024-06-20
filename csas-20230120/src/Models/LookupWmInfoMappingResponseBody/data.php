<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\LookupWmInfoMappingResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example aGVsbG8gc2F*****
     *
     * @var string
     */
    public $wmInfoBytesB64;
    protected $_name = [
        'wmInfoBytesB64' => 'WmInfoBytesB64',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->wmInfoBytesB64) {
            $res['WmInfoBytesB64'] = $this->wmInfoBytesB64;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WmInfoBytesB64'])) {
            $model->wmInfoBytesB64 = $map['WmInfoBytesB64'];
        }

        return $model;
    }
}
