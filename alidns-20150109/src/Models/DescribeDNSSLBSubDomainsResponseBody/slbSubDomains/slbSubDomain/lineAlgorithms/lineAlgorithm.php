<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDNSSLBSubDomainsResponseBody\slbSubDomains\slbSubDomain\lineAlgorithms;

use AlibabaCloud\Dara\Model;

class lineAlgorithm extends Model
{
    /**
     * @var string
     */
    public $line;

    /**
     * @var bool
     */
    public $open;
    protected $_name = [
        'line' => 'Line',
        'open' => 'Open',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->line) {
            $res['Line'] = $this->line;
        }

        if (null !== $this->open) {
            $res['Open'] = $this->open;
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
        if (isset($map['Line'])) {
            $model->line = $map['Line'];
        }

        if (isset($map['Open'])) {
            $model->open = $map['Open'];
        }

        return $model;
    }
}
