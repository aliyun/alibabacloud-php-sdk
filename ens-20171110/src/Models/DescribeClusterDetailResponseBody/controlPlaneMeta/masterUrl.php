<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeClusterDetailResponseBody\controlPlaneMeta;

use AlibabaCloud\Dara\Model;

class masterUrl extends Model
{
    /**
     * @var string
     */
    public $privateUrl;

    /**
     * @var string
     */
    public $publicUrl;
    protected $_name = [
        'privateUrl' => 'PrivateUrl',
        'publicUrl' => 'PublicUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->privateUrl) {
            $res['PrivateUrl'] = $this->privateUrl;
        }

        if (null !== $this->publicUrl) {
            $res['PublicUrl'] = $this->publicUrl;
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
        if (isset($map['PrivateUrl'])) {
            $model->privateUrl = $map['PrivateUrl'];
        }

        if (isset($map['PublicUrl'])) {
            $model->publicUrl = $map['PublicUrl'];
        }

        return $model;
    }
}
