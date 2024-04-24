<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class DescribePunishedDomainsResponseBody extends Model
{
    /**
     * @description The domain names that are penalized for failing to obtain an ICP filing.
     *
     * @var string[]
     */
    public $punishedDomains;

    /**
     * @description The request ID.
     *
     * @example B1F4D802-55A1-5D53-A247-7E79****85E7
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'punishedDomains' => 'PunishedDomains',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->punishedDomains) {
            $res['PunishedDomains'] = $this->punishedDomains;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePunishedDomainsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PunishedDomains'])) {
            if (!empty($map['PunishedDomains'])) {
                $model->punishedDomains = $map['PunishedDomains'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
