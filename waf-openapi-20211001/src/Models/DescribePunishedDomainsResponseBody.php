<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;

class DescribePunishedDomainsResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $punishedDomains;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'punishedDomains' => 'PunishedDomains',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->punishedDomains)) {
            Model::validateArray($this->punishedDomains);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->punishedDomains) {
            if (\is_array($this->punishedDomains)) {
                $res['PunishedDomains'] = [];
                $n1 = 0;
                foreach ($this->punishedDomains as $item1) {
                    $res['PunishedDomains'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['PunishedDomains'])) {
            if (!empty($map['PunishedDomains'])) {
                $model->punishedDomains = [];
                $n1 = 0;
                foreach ($map['PunishedDomains'] as $item1) {
                    $model->punishedDomains[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
