<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeBindableSmartAccessGatewaysResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeBindableSmartAccessGatewaysResponseBody\smartAccessGateways\smartAccessGateway;

class smartAccessGateways extends Model
{
    /**
     * @var smartAccessGateway[]
     */
    public $smartAccessGateway;
    protected $_name = [
        'smartAccessGateway' => 'SmartAccessGateway',
    ];

    public function validate()
    {
        if (\is_array($this->smartAccessGateway)) {
            Model::validateArray($this->smartAccessGateway);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->smartAccessGateway) {
            if (\is_array($this->smartAccessGateway)) {
                $res['SmartAccessGateway'] = [];
                $n1 = 0;
                foreach ($this->smartAccessGateway as $item1) {
                    $res['SmartAccessGateway'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['SmartAccessGateway'])) {
            if (!empty($map['SmartAccessGateway'])) {
                $model->smartAccessGateway = [];
                $n1 = 0;
                foreach ($map['SmartAccessGateway'] as $item1) {
                    $model->smartAccessGateway[$n1] = smartAccessGateway::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
