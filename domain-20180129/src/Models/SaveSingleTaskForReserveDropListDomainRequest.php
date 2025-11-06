<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Dara\Model;

class SaveSingleTaskForReserveDropListDomainRequest extends Model
{
    /**
     * @var string
     */
    public $contactTemplateId;

    /**
     * @var string
     */
    public $dns1;

    /**
     * @var string
     */
    public $dns2;

    /**
     * @var string
     */
    public $domainName;
    protected $_name = [
        'contactTemplateId' => 'ContactTemplateId',
        'dns1' => 'Dns1',
        'dns2' => 'Dns2',
        'domainName' => 'DomainName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactTemplateId) {
            $res['ContactTemplateId'] = $this->contactTemplateId;
        }

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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactTemplateId'])) {
            $model->contactTemplateId = $map['ContactTemplateId'];
        }

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
