<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models\ExtendImageStyleResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example -
     *
     * @var string
     */
    public $majorUrl;

    /**
     * @example http://luban-vgd-invi.oss-cn-hangzhou.aliyuncs.com/upload/result_/2019-9-26/invi__015694889247201016812_spCq4n.jpg?Expires=1569492524&OSSAccessKeyId=LTAI4Fc5SVvzUQ19K1Cz****&Signature=uOEP8gKvdgPtDcrXxRz1v37dsT****
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'majorUrl' => 'MajorUrl',
        'url'      => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->majorUrl) {
            $res['MajorUrl'] = $this->majorUrl;
        }
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
        if (isset($map['MajorUrl'])) {
            $model->majorUrl = $map['MajorUrl'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
