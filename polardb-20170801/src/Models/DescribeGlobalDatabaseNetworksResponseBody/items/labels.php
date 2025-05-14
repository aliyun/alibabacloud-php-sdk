<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeGlobalDatabaseNetworksResponseBody\items;

use AlibabaCloud\Dara\Model;

class labels extends Model
{
    /**
     * @var string
     */
    public $GDNVersion;
    protected $_name = [
        'GDNVersion' => 'GDNVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->GDNVersion) {
            $res['GDNVersion'] = $this->GDNVersion;
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
        if (isset($map['GDNVersion'])) {
            $model->GDNVersion = $map['GDNVersion'];
        }

        return $model;
    }
}
