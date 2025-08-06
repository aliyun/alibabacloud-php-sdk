<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetFileDownloadInfoRequest;

use AlibabaCloud\Dara\Model;

class option extends Model
{
    /**
     * @var bool
     */
    public $preferIntranet;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'preferIntranet' => 'PreferIntranet',
        'version' => 'Version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->preferIntranet) {
            $res['PreferIntranet'] = $this->preferIntranet;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['PreferIntranet'])) {
            $model->preferIntranet = $map['PreferIntranet'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
