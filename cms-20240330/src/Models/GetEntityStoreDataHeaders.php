<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Tea\Model;

class GetEntityStoreDataHeaders extends Model
{
    public $commonHeaders;

    /**
     * @example gzip
     *
     * @var string
     */
    public $acceptEncoding;
    protected $_name = [
        'acceptEncoding' => 'acceptEncoding',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->commonHeaders) {
            $res['commonHeaders'] = $this->commonHeaders;
        }
        if (null !== $this->acceptEncoding) {
            $res['acceptEncoding'] = $this->acceptEncoding;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetEntityStoreDataHeaders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commonHeaders'])) {
            $model->commonHeaders = $map['commonHeaders'];
        }
        if (isset($map['acceptEncoding'])) {
            $model->acceptEncoding = $map['acceptEncoding'];
        }

        return $model;
    }
}
