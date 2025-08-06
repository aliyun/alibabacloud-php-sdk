<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeRefreshQuotaResponseBody;

use AlibabaCloud\Dara\Model;

class refreshCacheQuota extends Model
{
    /**
     * @var string
     */
    public $dirQuota;

    /**
     * @var string
     */
    public $dirRemain;

    /**
     * @var string
     */
    public $urlQuota;

    /**
     * @var string
     */
    public $urlRemain;
    protected $_name = [
        'dirQuota' => 'DirQuota',
        'dirRemain' => 'DirRemain',
        'urlQuota' => 'UrlQuota',
        'urlRemain' => 'UrlRemain',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dirQuota) {
            $res['DirQuota'] = $this->dirQuota;
        }

        if (null !== $this->dirRemain) {
            $res['DirRemain'] = $this->dirRemain;
        }

        if (null !== $this->urlQuota) {
            $res['UrlQuota'] = $this->urlQuota;
        }

        if (null !== $this->urlRemain) {
            $res['UrlRemain'] = $this->urlRemain;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DirQuota'])) {
            $model->dirQuota = $map['DirQuota'];
        }

        if (isset($map['DirRemain'])) {
            $model->dirRemain = $map['DirRemain'];
        }

        if (isset($map['UrlQuota'])) {
            $model->urlQuota = $map['UrlQuota'];
        }

        if (isset($map['UrlRemain'])) {
            $model->urlRemain = $map['UrlRemain'];
        }

        return $model;
    }
}
