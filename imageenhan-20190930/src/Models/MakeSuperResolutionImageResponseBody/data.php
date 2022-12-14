<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models\MakeSuperResolutionImageResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example http://ivpd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/upload/ai-gateway_prod/ds%253D20191121/sisrx2_157433961551387538.jpg?Expires=1574598816&OSSAccessKeyId=LTAI4FeJ8qKkYn6SrHhQ****&Signature=8phY6dOz4U889nHfHC1g51nwAi****
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'url' => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
