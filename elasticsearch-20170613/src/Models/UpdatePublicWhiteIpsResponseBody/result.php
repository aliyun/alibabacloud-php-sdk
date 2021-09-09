<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdatePublicWhiteIpsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string[]
     */
    public $publicIpWhitelist;
    protected $_name = [
        'publicIpWhitelist' => 'publicIpWhitelist',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->publicIpWhitelist) {
            $res['publicIpWhitelist'] = $this->publicIpWhitelist;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['publicIpWhitelist'])) {
            if (!empty($map['publicIpWhitelist'])) {
                $model->publicIpWhitelist = $map['publicIpWhitelist'];
            }
        }

        return $model;
    }
}
