<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeAddonReleaseResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeAddonReleaseResponseBody\data\release;

class data extends Model
{
    /**
     * @var string
     */
    public $config;
    /**
     * @var release
     */
    public $release;
    protected $_name = [
        'config'  => 'Config',
        'release' => 'Release',
    ];

    public function validate()
    {
        if (null !== $this->release) {
            $this->release->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }

        if (null !== $this->release) {
            $res['Release'] = null !== $this->release ? $this->release->toArray($noStream) : $this->release;
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
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }

        if (isset($map['Release'])) {
            $model->release = release::fromMap($map['Release']);
        }

        return $model;
    }
}
