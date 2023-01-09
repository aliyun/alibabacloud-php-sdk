<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneResponseBody\scene\relationList\apiList;

use AlibabaCloud\Tea\Model;

class headerList extends Model
{
    /**
     * @example userId
     *
     * @var string
     */
    public $headerName;

    /**
     * @example 1111
     *
     * @var string
     */
    public $headerValue;
    protected $_name = [
        'headerName'  => 'HeaderName',
        'headerValue' => 'HeaderValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->headerName) {
            $res['HeaderName'] = $this->headerName;
        }
        if (null !== $this->headerValue) {
            $res['HeaderValue'] = $this->headerValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return headerList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HeaderName'])) {
            $model->headerName = $map['HeaderName'];
        }
        if (isset($map['HeaderValue'])) {
            $model->headerValue = $map['HeaderValue'];
        }

        return $model;
    }
}
