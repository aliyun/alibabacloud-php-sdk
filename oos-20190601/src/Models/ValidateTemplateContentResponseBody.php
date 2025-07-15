<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\SDK\Oos\V20190601\Models\ValidateTemplateContentResponseBody\tasks;
use AlibabaCloud\Tea\Model;

class ValidateTemplateContentResponseBody extends Model
{
    /**
     * @description The outputs of the template.
     *
     * @example {}
     *
     * @var string
     */
    public $outputs;

    /**
     * @description The parameters of the template.
     *
     * @example { "Status": { "Description": "(Required) The status of the Ecs instance.", "Type": "String" } }
     *
     * @var string
     */
    public $parameters;

    /**
     * @description The RAM role.
     *
     * @example OOSServiceRole
     *
     * @var string
     */
    public $ramRole;

    /**
     * @description The ID of the request.
     *
     * @example D5EE9591-1F2D-573E-8751-7F08BBB388D4
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The task defined in the template.
     *
     * @var tasks[]
     */
    public $tasks;
    protected $_name = [
        'outputs' => 'Outputs',
        'parameters' => 'Parameters',
        'ramRole' => 'RamRole',
        'requestId' => 'RequestId',
        'tasks' => 'Tasks',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->outputs) {
            $res['Outputs'] = $this->outputs;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->ramRole) {
            $res['RamRole'] = $this->ramRole;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->tasks) {
            $res['Tasks'] = [];
            if (null !== $this->tasks && \is_array($this->tasks)) {
                $n = 0;
                foreach ($this->tasks as $item) {
                    $res['Tasks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ValidateTemplateContentResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Outputs'])) {
            $model->outputs = $map['Outputs'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }
        if (isset($map['RamRole'])) {
            $model->ramRole = $map['RamRole'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Tasks'])) {
            if (!empty($map['Tasks'])) {
                $model->tasks = [];
                $n = 0;
                foreach ($map['Tasks'] as $item) {
                    $model->tasks[$n++] = null !== $item ? tasks::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
