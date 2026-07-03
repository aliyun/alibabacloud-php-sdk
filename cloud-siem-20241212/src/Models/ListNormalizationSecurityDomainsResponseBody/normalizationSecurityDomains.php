<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListNormalizationSecurityDomainsResponseBody;

use AlibabaCloud\Dara\Model;

class normalizationSecurityDomains extends Model
{
    /**
     * @var string
     */
    public $normalizationSecurityDomainId;

    /**
     * @var string
     */
    public $normalizationSecurityDomainName;
    protected $_name = [
        'normalizationSecurityDomainId' => 'NormalizationSecurityDomainId',
        'normalizationSecurityDomainName' => 'NormalizationSecurityDomainName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->normalizationSecurityDomainId) {
            $res['NormalizationSecurityDomainId'] = $this->normalizationSecurityDomainId;
        }

        if (null !== $this->normalizationSecurityDomainName) {
            $res['NormalizationSecurityDomainName'] = $this->normalizationSecurityDomainName;
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
        if (isset($map['NormalizationSecurityDomainId'])) {
            $model->normalizationSecurityDomainId = $map['NormalizationSecurityDomainId'];
        }

        if (isset($map['NormalizationSecurityDomainName'])) {
            $model->normalizationSecurityDomainName = $map['NormalizationSecurityDomainName'];
        }

        return $model;
    }
}
