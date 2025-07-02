<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\GetDeviceOtaInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wyota\V20210420\Models\GetDeviceOtaInfoResponseBody\data\version;

class data extends Model
{
    /**
     * @var version
     */
    public $version;
    protected $_name = [
        'version' => 'Version',
    ];

    public function validate()
    {
        if (null !== $this->version) {
            $this->version->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->version) {
            $res['Version'] = null !== $this->version ? $this->version->toArray($noStream) : $this->version;
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
        if (isset($map['Version'])) {
            $model->version = version::fromMap($map['Version']);
        }

        return $model;
    }
}
