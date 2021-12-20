<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class PutBucketCorsRequest extends Model
{
    /**
     * @var CORSConfiguration
     */
    public $cORSConfiguration;
    protected $_name = [
        'cORSConfiguration' => 'CORSConfiguration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cORSConfiguration) {
            $res['CORSConfiguration'] = null !== $this->cORSConfiguration ? $this->cORSConfiguration->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutBucketCorsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CORSConfiguration'])) {
            $model->cORSConfiguration = CORSConfiguration::fromMap($map['CORSConfiguration']);
        }

        return $model;
    }
}
