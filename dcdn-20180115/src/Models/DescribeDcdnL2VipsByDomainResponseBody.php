<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnL2VipsByDomainResponseBody extends Model
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
     * @var string[]
     */
    public $vips;
    protected $_name = [
        'domainName' => 'DomainName',
        'requestId'  => 'RequestId',
        'vips'       => 'Vips',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->vips) {
            $res['Vips'] = $this->vips;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnL2VipsByDomainResponseBody
     */
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
            if (!empty($map['Vips'])) {
                $model->vips = $map['Vips'];
            }
        }

        return $model;
    }
}
