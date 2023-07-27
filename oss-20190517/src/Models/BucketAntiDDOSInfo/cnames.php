<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models\BucketAntiDDOSInfo;

use AlibabaCloud\Tea\Model;

class cnames extends Model
{
    /**
     * @var string[]
     */
    public $domain;
    protected $_name = [
        'domain' => 'Domain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cnames
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            if (!empty($map['Domain'])) {
                $model->domain = $map['Domain'];
            }
        }

        return $model;
    }
}
