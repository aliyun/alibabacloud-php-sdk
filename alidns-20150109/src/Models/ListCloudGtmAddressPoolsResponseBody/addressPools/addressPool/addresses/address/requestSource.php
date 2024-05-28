<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\ListCloudGtmAddressPoolsResponseBody\addressPools\addressPool\addresses\address;

use AlibabaCloud\Tea\Model;

class requestSource extends Model
{
    /**
     * @var string[]
     */
    public $requestSource;
    protected $_name = [
        'requestSource' => 'RequestSource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestSource) {
            $res['RequestSource'] = $this->requestSource;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return requestSource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestSource'])) {
            if (!empty($map['RequestSource'])) {
                $model->requestSource = $map['RequestSource'];
            }
        }

        return $model;
    }
}
