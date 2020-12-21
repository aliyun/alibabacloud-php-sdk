<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models;

use AlibabaCloud\Tea\Model;

class SubmitSparkJobRequest extends Model
{
    /**
     * @var string
     */
    public $vcName;

    /**
     * @var string
     */
    public $configJson;
    protected $_name = [
        'vcName'     => 'VcName',
        'configJson' => 'ConfigJson',
    ];

    public function validate()
    {
        Model::validateRequired('vcName', $this->vcName, true);
        Model::validateRequired('configJson', $this->configJson, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vcName) {
            $res['VcName'] = $this->vcName;
        }
        if (null !== $this->configJson) {
            $res['ConfigJson'] = $this->configJson;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitSparkJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VcName'])) {
            $model->vcName = $map['VcName'];
        }
        if (isset($map['ConfigJson'])) {
            $model->configJson = $map['ConfigJson'];
        }

        return $model;
    }
}
