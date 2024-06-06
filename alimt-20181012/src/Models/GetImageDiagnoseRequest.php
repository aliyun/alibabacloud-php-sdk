<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alimt\V20181012\Models;

use AlibabaCloud\Tea\Model;

class GetImageDiagnoseRequest extends Model
{
    /**
     * @example {   "product_id": "1",   "platform": "ae" }
     *
     * @var string
     */
    public $extra;

    /**
     * @description This parameter is required.
     *
     * @example http://xxxxx.oss-cn-shenzhen.aliyuncs.com/jd/41209/xxxxx.jpg
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'extra' => 'Extra',
        'url'   => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extra) {
            $res['Extra'] = $this->extra;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetImageDiagnoseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Extra'])) {
            $model->extra = $map['Extra'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
