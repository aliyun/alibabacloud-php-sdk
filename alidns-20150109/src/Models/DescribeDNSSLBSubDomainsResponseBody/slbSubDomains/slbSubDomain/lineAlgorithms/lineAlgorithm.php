<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDNSSLBSubDomainsResponseBody\slbSubDomains\slbSubDomain\lineAlgorithms;

use AlibabaCloud\Tea\Model;

class lineAlgorithm extends Model
{
    /**
     * @description The DNS resolution line. The line can be China Telecom, China Mobile, and China Unicom.
     *
     * @example default
     *
     * @var string
     */
    public $line;

    /**
     * @description Indicates whether weighted round-robin is enabled for the line. Valid values:
     *
     *   **true** (default): Weighted round-robin is enabled.
     *   **false**: Weighted round-robin is disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $open;
    protected $_name = [
        'line' => 'Line',
        'open' => 'Open',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return lineAlgorithm
     */
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
