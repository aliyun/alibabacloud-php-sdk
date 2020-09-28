<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetDefaultAdjustValuesResponse\data;

use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetDefaultAdjustValuesResponse\data\defaultAdjustDataInfo\manualCtrl;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetDefaultAdjustValuesResponse\data\defaultAdjustDataInfo\manualPerform;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetDefaultAdjustValuesResponse\data\defaultAdjustDataInfo\perform;
use AlibabaCloud\Tea\Model;

class defaultAdjustDataInfo extends Model
{
    /**
     * @var manualCtrl
     */
    public $manualCtrl;

    /**
     * @var perform
     */
    public $perform;

    /**
     * @var manualPerform
     */
    public $manualPerform;
    protected $_name = [
        'manualCtrl'    => 'ManualCtrl',
        'perform'       => 'Perform',
        'manualPerform' => 'ManualPerform',
    ];

    public function validate()
    {
        Model::validateRequired('manualCtrl', $this->manualCtrl, true);
        Model::validateRequired('perform', $this->perform, true);
        Model::validateRequired('manualPerform', $this->manualPerform, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->manualCtrl) {
            $res['ManualCtrl'] = null !== $this->manualCtrl ? $this->manualCtrl->toMap() : null;
        }
        if (null !== $this->perform) {
            $res['Perform'] = null !== $this->perform ? $this->perform->toMap() : null;
        }
        if (null !== $this->manualPerform) {
            $res['ManualPerform'] = null !== $this->manualPerform ? $this->manualPerform->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return defaultAdjustDataInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ManualCtrl'])) {
            $model->manualCtrl = manualCtrl::fromMap($map['ManualCtrl']);
        }
        if (isset($map['Perform'])) {
            $model->perform = perform::fromMap($map['Perform']);
        }
        if (isset($map['ManualPerform'])) {
            $model->manualPerform = manualPerform::fromMap($map['ManualPerform']);
        }

        return $model;
    }
}
