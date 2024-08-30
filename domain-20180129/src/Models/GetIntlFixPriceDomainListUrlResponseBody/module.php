<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\GetIntlFixPriceDomainListUrlResponseBody;

use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example http://intl-fixed-price.oss-cn-zhangjiakou.aliyuncs.com/aliyun_intl_fixed_price_domain_20240827.gz?Expires=1724830838&OSSAccessKeyId=LTAI5tPMAybR4gfSEjdfAk1F&Signature=tb0SPs6tKb9gLKyQ5ibpQnBUuTY%3D
     *
     * @var string
     */
    public $downloadUrl;
    protected $_name = [
        'downloadUrl' => 'DownloadUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }

        return $model;
    }
}
