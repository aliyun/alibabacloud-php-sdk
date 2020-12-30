<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewaysResponseBody;

use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewaysResponseBody\smartAccessGateways\smartAccessGateway;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->smartAccessGateway) {
            $res['SmartAccessGateway'] = [];
            if (null !== $this->smartAccessGateway && \is_array($this->smartAccessGateway)) {
                $n = 0;
                foreach ($this->smartAccessGateway as $item) {
                    $res['SmartAccessGateway'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return smartAccessGateways
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SmartAccessGateway'])) {
            if (!empty($map['SmartAccessGateway'])) {
                $model->smartAccessGateway = [];
                $n                         = 0;
                foreach ($map['SmartAccessGateway'] as $item) {
                    $model->smartAccessGateway[$n++] = null !== $item ? smartAccessGateway::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
