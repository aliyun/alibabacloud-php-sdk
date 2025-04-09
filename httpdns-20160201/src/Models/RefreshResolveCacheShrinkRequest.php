<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Httpdns\V20160201\Models;

use AlibabaCloud\Dara\Model;

class RefreshResolveCacheShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $domainsShrink;
    protected $_name = [
        'domainsShrink' => 'Domains',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainsShrink) {
            $res['Domains'] = $this->domainsShrink;
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
        if (isset($map['Domains'])) {
            $model->domainsShrink = $map['Domains'];
        }

        return $model;
    }
}
