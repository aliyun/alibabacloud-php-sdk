<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class PaasFunctionPluginFieldDataDTO extends Model
{
    /**
     * @description AliyunFunction
     *
     * @var string
     */
    public $aliyunFunction;

    /**
     * @description AliyunService
     *
     * @var string
     */
    public $aliyunService;

    /**
     * @description Code
     *
     * @var string
     */
    public $code;

    /**
     * @description Description
     *
     * @var string
     */
    public $description;

    /**
     * @description EndPoint
     *
     * @var string
     */
    public $endPoint;

    /**
     * @description Function
     *
     * @var string
     */
    public $function;

    /**
     * @description Name
     *
     * @var string
     */
    public $name;

    /**
     * @description Params
     *
     * @var mixed[]
     */
    public $params;

    /**
     * @description Switch
     *
     * @var PaasSwitchCaseDTO[]
     */
    public $switch;

    /**
     * @description Type
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'aliyunFunction' => 'AliyunFunction',
        'aliyunService'  => 'AliyunService',
        'code'           => 'Code',
        'description'    => 'Description',
        'endPoint'       => 'EndPoint',
        'function'       => 'Function',
        'name'           => 'Name',
        'params'         => 'Params',
        'switch'         => 'Switch',
        'type'           => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunFunction) {
            $res['AliyunFunction'] = $this->aliyunFunction;
        }
        if (null !== $this->aliyunService) {
            $res['AliyunService'] = $this->aliyunService;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->endPoint) {
            $res['EndPoint'] = $this->endPoint;
        }
        if (null !== $this->function) {
            $res['Function'] = $this->function;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }
        if (null !== $this->switch) {
            $res['Switch'] = [];
            if (null !== $this->switch && \is_array($this->switch)) {
                $n = 0;
                foreach ($this->switch as $item) {
                    $res['Switch'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PaasFunctionPluginFieldDataDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunFunction'])) {
            $model->aliyunFunction = $map['AliyunFunction'];
        }
        if (isset($map['AliyunService'])) {
            $model->aliyunService = $map['AliyunService'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EndPoint'])) {
            $model->endPoint = $map['EndPoint'];
        }
        if (isset($map['Function'])) {
            $model->function = $map['Function'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }
        if (isset($map['Switch'])) {
            if (!empty($map['Switch'])) {
                $model->switch = [];
                $n             = 0;
                foreach ($map['Switch'] as $item) {
                    $model->switch[$n++] = null !== $item ? PaasSwitchCaseDTO::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
