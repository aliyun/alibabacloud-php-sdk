<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models\SelectedDomainListResponseBody;

use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example http://selected-domain.oss-cn-zhangjiakou.aliyuncs.com/aliyun_selected_domain_20231109.gz?Expires=1699524493&OSSAccessKeyId=LTAI5tPMAybR4gfSEjdfAk1F&Signature=2Tpo7Eaf%2BqIop8SuMtI91m%2FAFpY%3D
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
