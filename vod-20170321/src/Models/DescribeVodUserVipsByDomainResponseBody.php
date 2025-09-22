<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodUserVipsByDomainResponseBody\vips;

class DescribeVodUserVipsByDomainResponseBody extends Model
{
    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var vips
     */
    public $vips;
    protected $_name = [
        'domainName' => 'DomainName',
        'requestId' => 'RequestId',
        'vips' => 'Vips',
    ];

    public function validate()
    {
        if (null !== $this->vips) {
            $this->vips->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->vips) {
            $res['Vips'] = null !== $this->vips ? $this->vips->toArray($noStream) : $this->vips;
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
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Vips'])) {
            $model->vips = vips::fromMap($map['Vips']);
        }

        return $model;
    }
}
