<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models\ListFunctionResponseBody;

use AlibabaCloud\SDK\MPServerless\V20190615\Models\ListFunctionResponseBody\dataList\spec;
use AlibabaCloud\Tea\Model;

class dataList extends Model
{
    /**
     * @example 2019-06-21T02:22:55.996Z
     *
     * @var string
     */
    public $createdAt;

    /**
     * @example test
     *
     * @var string
     */
    public $desc;

    /**
     * @example /http/hello
     *
     * @var string
     */
    public $httpTriggerPath;

    /**
     * @example 2019-06-21T02:22:55.996Z
     *
     * @var string
     */
    public $modifiedAt;

    /**
     * @example demoFunction
     *
     * @var string
     */
    public $name;

    /**
     * @var spec
     */
    public $spec;

    /**
     * @example cron:0 0 * * * *
     *
     * @var string
     */
    public $timingTriggerConfig;
    protected $_name = [
        'createdAt'           => 'CreatedAt',
        'desc'                => 'Desc',
        'httpTriggerPath'     => 'HttpTriggerPath',
        'modifiedAt'          => 'ModifiedAt',
        'name'                => 'Name',
        'spec'                => 'Spec',
        'timingTriggerConfig' => 'TimingTriggerConfig',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataList
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

        return $model;
    }
}
