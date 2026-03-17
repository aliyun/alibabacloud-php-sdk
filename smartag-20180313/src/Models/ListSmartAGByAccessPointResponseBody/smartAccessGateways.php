<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\ListSmartAGByAccessPointResponseBody;

use AlibabaCloud\Dara\Model;

class smartAccessGateways extends Model
{
    /**
     * @var string
     */
    public $associatedCcnId;

    /**
     * @var string
     */
    public $hardwareVersion;

    /**
     * @var string
     */
    public $routingStrategy;

    /**
     * @var string
     */
    public $smartAGDescription;

    /**
     * @var string
     */
    public $smartAGId;

    /**
     * @var string
     */
    public $smartAGName;

    /**
     * @var string
     */
    public $smartAGStatus;
    protected $_name = [
        'associatedCcnId' => 'AssociatedCcnId',
        'hardwareVersion' => 'HardwareVersion',
        'routingStrategy' => 'RoutingStrategy',
        'smartAGDescription' => 'SmartAGDescription',
        'smartAGId' => 'SmartAGId',
        'smartAGName' => 'SmartAGName',
        'smartAGStatus' => 'SmartAGStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->associatedCcnId) {
            $res['AssociatedCcnId'] = $this->associatedCcnId;
        }

        if (null !== $this->hardwareVersion) {
            $res['HardwareVersion'] = $this->hardwareVersion;
        }

        if (null !== $this->routingStrategy) {
            $res['RoutingStrategy'] = $this->routingStrategy;
        }

        if (null !== $this->smartAGDescription) {
            $res['SmartAGDescription'] = $this->smartAGDescription;
        }

        if (null !== $this->smartAGId) {
            $res['SmartAGId'] = $this->smartAGId;
        }

        if (null !== $this->smartAGName) {
            $res['SmartAGName'] = $this->smartAGName;
        }

        if (null !== $this->smartAGStatus) {
            $res['SmartAGStatus'] = $this->smartAGStatus;
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
        if (isset($map['AssociatedCcnId'])) {
            $model->associatedCcnId = $map['AssociatedCcnId'];
        }

        if (isset($map['HardwareVersion'])) {
            $model->hardwareVersion = $map['HardwareVersion'];
        }

        if (isset($map['RoutingStrategy'])) {
            $model->routingStrategy = $map['RoutingStrategy'];
        }

        if (isset($map['SmartAGDescription'])) {
            $model->smartAGDescription = $map['SmartAGDescription'];
        }

        if (isset($map['SmartAGId'])) {
            $model->smartAGId = $map['SmartAGId'];
        }

        if (isset($map['SmartAGName'])) {
            $model->smartAGName = $map['SmartAGName'];
        }

        if (isset($map['SmartAGStatus'])) {
            $model->smartAGStatus = $map['SmartAGStatus'];
        }

        return $model;
    }
}
