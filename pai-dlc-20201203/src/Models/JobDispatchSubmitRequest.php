<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class JobDispatchSubmitRequest extends Model
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
     * @var string[]
     */
    public $properties;

    /**
     * @description odps settings
     *
     * @var string[]
     */
    public $settings;
    protected $_name = [
        'algoName'    => 'AlgoName',
        'projectName' => 'ProjectName',
        'properties'  => 'Properties',
        'settings'    => 'Settings',
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
        if (null !== $this->properties) {
            $res['Properties'] = $this->properties;
        }
        if (null !== $this->settings) {
            $res['Settings'] = $this->settings;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return JobDispatchSubmitRequest
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
            $model->properties = $map['Properties'];
        }
        if (isset($map['Settings'])) {
            $model->settings = $map['Settings'];
        }

        return $model;
    }
}
