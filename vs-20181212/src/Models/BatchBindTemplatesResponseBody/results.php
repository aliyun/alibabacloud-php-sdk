<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\BatchBindTemplatesResponseBody;

use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @example some error
     *
     * @var string
     */
    public $error;

    /**
     * @example 323*****994-cn-qingdao
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example group
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example 323*****998-cn-qingdao
     *
     * @var string
     */
    public $templateId;
    protected $_name = [
        'error'        => 'Error',
        'instanceId'   => 'InstanceId',
        'instanceType' => 'InstanceType',
        'templateId'   => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return results
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Error'])) {
            $model->error = $map['Error'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
