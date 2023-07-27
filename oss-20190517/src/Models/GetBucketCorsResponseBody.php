<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class GetBucketCorsResponseBody extends Model
{
    /**
     * @var CORSRule[]
     */
    public $CORSRule;

    /**
     * @example true
     *
     * @var bool
     */
    public $responseVary;
    protected $_name = [
        'CORSRule'     => 'CORSRule',
        'responseVary' => 'ResponseVary',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->CORSRule) {
            $res['CORSRule'] = [];
            if (null !== $this->CORSRule && \is_array($this->CORSRule)) {
                $n = 0;
                foreach ($this->CORSRule as $item) {
                    $res['CORSRule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->responseVary) {
            $res['ResponseVary'] = $this->responseVary;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetBucketCorsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CORSRule'])) {
            if (!empty($map['CORSRule'])) {
                $model->CORSRule = [];
                $n               = 0;
                foreach ($map['CORSRule'] as $item) {
                    $model->CORSRule[$n++] = null !== $item ? CORSRule::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ResponseVary'])) {
            $model->responseVary = $map['ResponseVary'];
        }

        return $model;
    }
}
