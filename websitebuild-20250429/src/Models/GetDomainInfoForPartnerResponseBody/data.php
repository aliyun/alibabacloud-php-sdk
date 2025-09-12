<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetDomainInfoForPartnerResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetDomainInfoForPartnerResponseBody\data\ownership;

class data extends Model
{
    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $nameServers;

    /**
     * @var ownership
     */
    public $ownership;

    /**
     * @var string
     */
    public $registrar;
    protected $_name = [
        'domainName' => 'DomainName',
        'nameServers' => 'NameServers',
        'ownership' => 'Ownership',
        'registrar' => 'Registrar',
    ];

    public function validate()
    {
        if (null !== $this->ownership) {
            $this->ownership->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->nameServers) {
            $res['NameServers'] = $this->nameServers;
        }

        if (null !== $this->ownership) {
            $res['Ownership'] = null !== $this->ownership ? $this->ownership->toArray($noStream) : $this->ownership;
        }

        if (null !== $this->registrar) {
            $res['Registrar'] = $this->registrar;
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
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['NameServers'])) {
            $model->nameServers = $map['NameServers'];
        }

        if (isset($map['Ownership'])) {
            $model->ownership = ownership::fromMap($map['Ownership']);
        }

        if (isset($map['Registrar'])) {
            $model->registrar = $map['Registrar'];
        }

        return $model;
    }
}
