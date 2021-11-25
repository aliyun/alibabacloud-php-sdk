<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class JobDispatchQueryShrinkRequest extends Model
{
    /**
     * @description PAI-Xflow名称
     *
     * @var string
     */
    public $algoName;

    /**
     * @description PAI-project名称
     *
     * @var string
     */
    public $projectName;

    /**
     * @description properties of pai command
     *
     * @var string
     */
    public $propertiesShrink;

    /**
     * @description odps settings
     *
     * @var string
     */
    public $settingsShrink;
    protected $_name = [
        'algoName'         => 'AlgoName',
        'projectName'      => 'ProjectName',
        'propertiesShrink' => 'Properties',
        'settingsShrink'   => 'Settings',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algoName) {
            $res['AlgoName'] = $this->algoName;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->propertiesShrink) {
            $res['Properties'] = $this->propertiesShrink;
        }
        if (null !== $this->settingsShrink) {
            $res['Settings'] = $this->settingsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return JobDispatchQueryShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlgoName'])) {
            $model->algoName = $map['AlgoName'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['Properties'])) {
            $model->propertiesShrink = $map['Properties'];
        }
        if (isset($map['Settings'])) {
            $model->settingsShrink = $map['Settings'];
        }

        return $model;
    }
}
