<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\ListSmartAGByAccessPointResponseBody;

use AlibabaCloud\Tea\Model;

class smartAccessGateways extends Model
{
    /**
     * @var string
     */
    public $routingStrategy;

    /**
     * @var string
     */
    public $smartAGName;

    /**
     * @var string
     */
    public $smartAGId;

    /**
     * @var string
     */
    public $smartAGStatus;

    /**
     * @var string
     */
    public $smartAGDescription;

    /**
     * @var string
     */
    public $associatedCcnId;

    /**
     * @var string
     */
    public $hardwareVersion;
    protected $_name = [
        'routingStrategy'    => 'RoutingStrategy',
        'smartAGName'        => 'SmartAGName',
        'smartAGId'          => 'SmartAGId',
        'smartAGStatus'      => 'SmartAGStatus',
        'smartAGDescription' => 'SmartAGDescription',
        'associatedCcnId'    => 'AssociatedCcnId',
        'hardwareVersion'    => 'HardwareVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->routingStrategy) {
            $res['RoutingStrategy'] = $this->routingStrategy;
        }
        if (null !== $this->smartAGName) {
            $res['SmartAGName'] = $this->smartAGName;
        }
        if (null !== $this->smartAGId) {
            $res['SmartAGId'] = $this->smartAGId;
        }
        if (null !== $this->smartAGStatus) {
            $res['SmartAGStatus'] = $this->smartAGStatus;
        }
        if (null !== $this->smartAGDescription) {
            $res['SmartAGDescription'] = $this->smartAGDescription;
        }
        if (null !== $this->associatedCcnId) {
            $res['AssociatedCcnId'] = $this->associatedCcnId;
        }
        if (null !== $this->hardwareVersion) {
            $res['HardwareVersion'] = $this->hardwareVersion;
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
        if (isset($map['RoutingStrategy'])) {
            $model->routingStrategy = $map['RoutingStrategy'];
        }
        if (isset($map['SmartAGName'])) {
            $model->smartAGName = $map['SmartAGName'];
        }
        if (isset($map['SmartAGId'])) {
            $model->smartAGId = $map['SmartAGId'];
        }
        if (isset($map['SmartAGStatus'])) {
            $model->smartAGStatus = $map['SmartAGStatus'];
        }
        if (isset($map['SmartAGDescription'])) {
            $model->smartAGDescription = $map['SmartAGDescription'];
        }
        if (isset($map['AssociatedCcnId'])) {
            $model->associatedCcnId = $map['AssociatedCcnId'];
        }
        if (isset($map['HardwareVersion'])) {
            $model->hardwareVersion = $map['HardwareVersion'];
        }

        return $model;
    }
}
