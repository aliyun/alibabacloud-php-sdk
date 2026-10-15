<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\SelectedComponentConfigDTO\attributeConfigs;

class SelectedComponentConfigDTO extends Model
{
    /**
     * @var attributeConfigs[]
     */
    public $attributeConfigs;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $tag;
    protected $_name = [
        'attributeConfigs' => 'AttributeConfigs',
        'code' => 'Code',
        'tag' => 'Tag',
    ];

    public function validate()
    {
        if (\is_array($this->attributeConfigs)) {
            Model::validateArray($this->attributeConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributeConfigs) {
            if (\is_array($this->attributeConfigs)) {
                $res['AttributeConfigs'] = [];
                $n1 = 0;
                foreach ($this->attributeConfigs as $item1) {
                    $res['AttributeConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
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
        if (isset($map['AttributeConfigs'])) {
            if (!empty($map['AttributeConfigs'])) {
                $model->attributeConfigs = [];
                $n1 = 0;
                foreach ($map['AttributeConfigs'] as $item1) {
                    $model->attributeConfigs[$n1] = attributeConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        return $model;
    }
}
