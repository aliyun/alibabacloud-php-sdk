<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetNacosMcpServerResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\DataToolSpecToolsMetaValue;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetNacosMcpServerResponseBody\data\toolSpec\tools;

class toolSpec extends Model
{
    /**
     * @var mixed
     */
    public $securitySchemes;

    /**
     * @var string
     */
    public $specificationType;

    /**
     * @var tools[]
     */
    public $tools;

    /**
     * @var DataToolSpecToolsMetaValue[]
     */
    public $toolsMeta;
    protected $_name = [
        'securitySchemes' => 'SecuritySchemes',
        'specificationType' => 'SpecificationType',
        'tools' => 'Tools',
        'toolsMeta' => 'ToolsMeta',
    ];

    public function validate()
    {
        if (\is_array($this->tools)) {
            Model::validateArray($this->tools);
        }
        if (\is_array($this->toolsMeta)) {
            Model::validateArray($this->toolsMeta);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->securitySchemes) {
            $res['SecuritySchemes'] = $this->securitySchemes;
        }

        if (null !== $this->specificationType) {
            $res['SpecificationType'] = $this->specificationType;
        }

        if (null !== $this->tools) {
            if (\is_array($this->tools)) {
                $res['Tools'] = [];
                $n1 = 0;
                foreach ($this->tools as $item1) {
                    $res['Tools'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->toolsMeta) {
            if (\is_array($this->toolsMeta)) {
                $res['ToolsMeta'] = [];
                foreach ($this->toolsMeta as $key1 => $value1) {
                    $res['ToolsMeta'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
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
        if (isset($map['SecuritySchemes'])) {
            $model->securitySchemes = $map['SecuritySchemes'];
        }

        if (isset($map['SpecificationType'])) {
            $model->specificationType = $map['SpecificationType'];
        }

        if (isset($map['Tools'])) {
            if (!empty($map['Tools'])) {
                $model->tools = [];
                $n1 = 0;
                foreach ($map['Tools'] as $item1) {
                    $model->tools[$n1] = tools::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ToolsMeta'])) {
            if (!empty($map['ToolsMeta'])) {
                $model->toolsMeta = [];
                foreach ($map['ToolsMeta'] as $key1 => $value1) {
                    $model->toolsMeta[$key1] = DataToolSpecToolsMetaValue::fromMap($value1);
                }
            }
        }

        return $model;
    }
}
