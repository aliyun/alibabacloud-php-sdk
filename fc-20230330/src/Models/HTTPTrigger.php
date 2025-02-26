<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class HTTPTrigger extends Model
{
    /**
     * @var string
     */
    public $urlInternet;
    /**
     * @var string
     */
    public $urlIntranet;
    protected $_name = [
        'urlInternet' => 'urlInternet',
        'urlIntranet' => 'urlIntranet',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->urlInternet) {
            $res['urlInternet'] = $this->urlInternet;
        }

        if (null !== $this->urlIntranet) {
            $res['urlIntranet'] = $this->urlIntranet;
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
        if (isset($map['urlInternet'])) {
            $model->urlInternet = $map['urlInternet'];
        }

        if (isset($map['urlIntranet'])) {
            $model->urlIntranet = $map['urlIntranet'];
        }

        return $model;
    }
}
