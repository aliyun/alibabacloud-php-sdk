<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models;

use AlibabaCloud\Dara\Model;

class UpdateActionPlanRequest extends Model
{
    /**
     * @var string
     */
    public $actionPlanId;

    /**
     * @var float
     */
    public $desiredCapacity;

    /**
     * @var string
     */
    public $enabled;
    protected $_name = [
        'actionPlanId' => 'ActionPlanId',
        'desiredCapacity' => 'DesiredCapacity',
        'enabled' => 'Enabled',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionPlanId) {
            $res['ActionPlanId'] = $this->actionPlanId;
        }

        if (null !== $this->desiredCapacity) {
            $res['DesiredCapacity'] = $this->desiredCapacity;
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
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
        if (isset($map['ActionPlanId'])) {
            $model->actionPlanId = $map['ActionPlanId'];
        }

        if (isset($map['DesiredCapacity'])) {
            $model->desiredCapacity = $map['DesiredCapacity'];
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        return $model;
    }
}
