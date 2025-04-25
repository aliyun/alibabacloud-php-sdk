<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models\GetEndpointAttributeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\GetEndpointAttributeResponseBody\data\cidrList;

class data extends Model
{
    /**
     * @var cidrList[]
     */
    public $cidrList;

    /**
     * @var bool
     */
    public $endpointEnabled;
    protected $_name = [
        'cidrList' => 'CidrList',
        'endpointEnabled' => 'EndpointEnabled',
    ];

    public function validate()
    {
        if (\is_array($this->cidrList)) {
            Model::validateArray($this->cidrList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cidrList) {
            if (\is_array($this->cidrList)) {
                $res['CidrList'] = [];
                $n1 = 0;
                foreach ($this->cidrList as $item1) {
                    $res['CidrList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->endpointEnabled) {
            $res['EndpointEnabled'] = $this->endpointEnabled;
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
        if (isset($map['CidrList'])) {
            if (!empty($map['CidrList'])) {
                $model->cidrList = [];
                $n1 = 0;
                foreach ($map['CidrList'] as $item1) {
                    $model->cidrList[$n1++] = cidrList::fromMap($item1);
                }
            }
        }

        if (isset($map['EndpointEnabled'])) {
            $model->endpointEnabled = $map['EndpointEnabled'];
        }

        return $model;
    }
}
