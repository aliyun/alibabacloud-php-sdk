<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListIntentionsResponseBody\data\intentList\slot;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListIntentionsResponseBody\data\intentList\slot\feedbackFunctions\switch_;

class feedbackFunctions extends Model
{
    /**
     * @var string
     */
    public $aliyunFunction;

    /**
     * @var string
     */
    public $aliyunService;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $endPoint;

    /**
     * @var string
     */
    public $function;

    /**
     * @var string
     */
    public $name;

    /**
     * @var mixed[]
     */
    public $params;

    /**
     * @var switch_[]
     */
    public $switch;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'aliyunFunction' => 'AliyunFunction',
        'aliyunService' => 'AliyunService',
        'code' => 'Code',
        'description' => 'Description',
        'endPoint' => 'EndPoint',
        'function' => 'Function',
        'name' => 'Name',
        'params' => 'Params',
        'switch' => 'Switch',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->params)) {
            Model::validateArray($this->params);
        }
        if (\is_array($this->switch)) {
            Model::validateArray($this->switch);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->params)) {
                $res['Params'] = [];
                foreach ($this->params as $key1 => $value1) {
                    $res['Params'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->switch) {
            if (\is_array($this->switch)) {
                $res['Switch'] = [];
                $n1 = 0;
                foreach ($this->switch as $item1) {
                    $res['Switch'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
            if (!empty($map['Params'])) {
                $model->params = [];
                foreach ($map['Params'] as $key1 => $value1) {
                    $model->params[$key1] = $value1;
                }
            }
        }

        if (isset($map['Switch'])) {
            if (!empty($map['Switch'])) {
                $model->switch = [];
                $n1 = 0;
                foreach ($map['Switch'] as $item1) {
                    $model->switch[$n1++] = switch_::fromMap($item1);
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
