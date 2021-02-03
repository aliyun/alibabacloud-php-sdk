<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDNSSLBSubDomainsResponse\slbSubDomains;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDNSSLBSubDomainsResponse\slbSubDomains\slbSubDomain\lineAlgorithms;
use AlibabaCloud\Tea\Model;

class slbSubDomain extends Model
{
    /**
     * @var string
     */
    public $subDomain;

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
    public $type;

    /**
     * @var lineAlgorithms
     */
    public $lineAlgorithms;
    protected $_name = [
        'subDomain'      => 'SubDomain',
        'recordCount'    => 'RecordCount',
        'open'           => 'Open',
        'type'           => 'Type',
        'lineAlgorithms' => 'LineAlgorithms',
    ];

    public function validate()
    {
        Model::validateRequired('subDomain', $this->subDomain, true);
        Model::validateRequired('recordCount', $this->recordCount, true);
        Model::validateRequired('open', $this->open, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('lineAlgorithms', $this->lineAlgorithms, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subDomain) {
            $res['SubDomain'] = $this->subDomain;
        }
        if (null !== $this->recordCount) {
            $res['RecordCount'] = $this->recordCount;
        }
        if (null !== $this->open) {
            $res['Open'] = $this->open;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['SubDomain'])) {
            $model->subDomain = $map['SubDomain'];
        }
        if (isset($map['RecordCount'])) {
            $model->recordCount = $map['RecordCount'];
        }
        if (isset($map['Open'])) {
            $model->open = $map['Open'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['LineAlgorithms'])) {
            $model->lineAlgorithms = lineAlgorithms::fromMap($map['LineAlgorithms']);
        }

        return $model;
    }
}
