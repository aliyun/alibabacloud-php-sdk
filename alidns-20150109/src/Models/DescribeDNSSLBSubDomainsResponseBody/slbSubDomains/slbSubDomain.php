<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDNSSLBSubDomainsResponseBody\slbSubDomains;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDNSSLBSubDomainsResponseBody\slbSubDomains\slbSubDomain\lineAlgorithms;
use AlibabaCloud\Tea\Model;

class slbSubDomain extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $recordCount;

    /**
     * @var bool
     */
    public $open;

    /**
     * @var string
     */
    public $subDomain;

    /**
     * @var lineAlgorithms
     */
    public $lineAlgorithms;
    protected $_name = [
        'type'           => 'Type',
        'recordCount'    => 'RecordCount',
        'open'           => 'Open',
        'subDomain'      => 'SubDomain',
        'lineAlgorithms' => 'LineAlgorithms',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->recordCount) {
            $res['RecordCount'] = $this->recordCount;
        }
        if (null !== $this->open) {
            $res['Open'] = $this->open;
        }
        if (null !== $this->subDomain) {
            $res['SubDomain'] = $this->subDomain;
        }
        if (null !== $this->lineAlgorithms) {
            $res['LineAlgorithms'] = null !== $this->lineAlgorithms ? $this->lineAlgorithms->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return slbSubDomain
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['RecordCount'])) {
            $model->recordCount = $map['RecordCount'];
        }
        if (isset($map['Open'])) {
            $model->open = $map['Open'];
        }
        if (isset($map['SubDomain'])) {
            $model->subDomain = $map['SubDomain'];
        }
        if (isset($map['LineAlgorithms'])) {
            $model->lineAlgorithms = lineAlgorithms::fromMap($map['LineAlgorithms']);
        }

        return $model;
    }
}
