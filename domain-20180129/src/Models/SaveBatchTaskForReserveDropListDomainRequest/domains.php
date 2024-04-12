<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\SaveBatchTaskForReserveDropListDomainRequest;

use AlibabaCloud\Tea\Model;

class domains extends Model
{
    /**
     * @var string
     */
    public $dns1;

    /**
     * @var string
     */
    public $dns2;

    /**
     * @example example.com
     *
     * @var string
     */
    public $domainName;
    protected $_name = [
        'dns1'       => 'Dns1',
        'dns2'       => 'Dns2',
        'domainName' => 'DomainName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dns1) {
            $res['Dns1'] = $this->dns1;
        }
        if (null !== $this->dns2) {
            $res['Dns2'] = $this->dns2;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domains
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Dns1'])) {
            $model->dns1 = $map['Dns1'];
        }
        if (isset($map['Dns2'])) {
            $model->dns2 = $map['Dns2'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        return $model;
    }
}
