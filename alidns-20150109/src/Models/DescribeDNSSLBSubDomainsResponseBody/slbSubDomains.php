<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDNSSLBSubDomainsResponseBody;

use AlibabaCloud\Tea\Model;

class slbSubDomains extends Model
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
    protected $_name = [
        'type'        => 'Type',
        'recordCount' => 'RecordCount',
        'open'        => 'Open',
        'subDomain'   => 'SubDomain',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return slbSubDomains
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

        return $model;
    }
}
