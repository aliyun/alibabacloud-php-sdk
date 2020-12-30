<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeNodeCidrListResponseBody;

use AlibabaCloud\Tea\Model;

class intranetIPs extends Model
{
    /**
     * @var string[]
     */
    public $intranetIP;
    protected $_name = [
        'intranetIP' => 'IntranetIP',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->intranetIP) {
            $res['IntranetIP'] = $this->intranetIP;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return intranetIPs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IntranetIP'])) {
            if (!empty($map['IntranetIP'])) {
                $model->intranetIP = $map['IntranetIP'];
            }
        }

        return $model;
    }
}
