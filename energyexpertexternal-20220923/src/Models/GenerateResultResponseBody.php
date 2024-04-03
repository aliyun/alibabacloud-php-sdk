<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\Tea\Model;

class GenerateResultResponseBody extends Model
{
    /**
     * @description The returned data. `true` indicates that the request is successful, `false` indicates that the request fails.
     *
     * @example true
     *
     * @var bool
     */
    public $data;

    /**
     * @description The ID of the request. The value is unique for each request. This facilitates subsequent troubleshooting.
     *
     * @example 83A5A7DD-8974-5769-952E-590A97BEA34E
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'data'      => 'data',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['data'] = $this->data;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateResultResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['data'])) {
            $model->data = $map['data'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
