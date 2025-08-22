<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class GetRayDashboardResponseBody extends Model
{
    /**
     * @var string
     */
    public $metricsEnabled;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'metricsEnabled' => 'metricsEnabled',
        'url' => 'url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->metricsEnabled) {
            $res['metricsEnabled'] = $this->metricsEnabled;
        }

        if (null !== $this->url) {
            $res['url'] = $this->url;
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
        if (isset($map['metricsEnabled'])) {
            $model->metricsEnabled = $map['metricsEnabled'];
        }

        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
