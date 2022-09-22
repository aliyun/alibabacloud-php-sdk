<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeFunctionResponseBody;

use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeFunctionResponseBody\function_\spec;
use AlibabaCloud\Tea\Model;

class function_ extends Model
{
    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $desc;

    /**
     * @var string
     */
    public $httpTriggerPath;

    /**
     * @var string
     */
    public $modifiedAt;

    /**
     * @var string
     */
    public $name;

    /**
     * @var spec
     */
    public $spec;

    /**
     * @var string
     */
    public $timingTriggerConfig;

    /**
     * @var string
     */
    public $timingTriggerUserPayload;
    protected $_name = [
        'createdAt'                => 'CreatedAt',
        'desc'                     => 'Desc',
        'httpTriggerPath'          => 'HttpTriggerPath',
        'modifiedAt'               => 'ModifiedAt',
        'name'                     => 'Name',
        'spec'                     => 'Spec',
        'timingTriggerConfig'      => 'TimingTriggerConfig',
        'timingTriggerUserPayload' => 'TimingTriggerUserPayload',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->httpTriggerPath) {
            $res['HttpTriggerPath'] = $this->httpTriggerPath;
        }
        if (null !== $this->modifiedAt) {
            $res['ModifiedAt'] = $this->modifiedAt;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->spec) {
            $res['Spec'] = null !== $this->spec ? $this->spec->toMap() : null;
        }
        if (null !== $this->timingTriggerConfig) {
            $res['TimingTriggerConfig'] = $this->timingTriggerConfig;
        }
        if (null !== $this->timingTriggerUserPayload) {
            $res['TimingTriggerUserPayload'] = $this->timingTriggerUserPayload;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return function_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['HttpTriggerPath'])) {
            $model->httpTriggerPath = $map['HttpTriggerPath'];
        }
        if (isset($map['ModifiedAt'])) {
            $model->modifiedAt = $map['ModifiedAt'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Spec'])) {
            $model->spec = spec::fromMap($map['Spec']);
        }
        if (isset($map['TimingTriggerConfig'])) {
            $model->timingTriggerConfig = $map['TimingTriggerConfig'];
        }
        if (isset($map['TimingTriggerUserPayload'])) {
            $model->timingTriggerUserPayload = $map['TimingTriggerUserPayload'];
        }

        return $model;
    }
}
