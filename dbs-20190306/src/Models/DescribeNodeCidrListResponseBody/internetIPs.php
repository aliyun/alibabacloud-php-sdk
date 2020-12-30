<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeNodeCidrListResponseBody;

use AlibabaCloud\Tea\Model;

class internetIPs extends Model
{
    /**
     * @var string[]
     */
    public $internetIP;
    protected $_name = [
        'internetIP' => 'InternetIP',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->internetIP) {
            $res['InternetIP'] = $this->internetIP;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return internetIPs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InternetIP'])) {
            if (!empty($map['InternetIP'])) {
                $model->internetIP = $map['InternetIP'];
            }
        }

        return $model;
    }
}
