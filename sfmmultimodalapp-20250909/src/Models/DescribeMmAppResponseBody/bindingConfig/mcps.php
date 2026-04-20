<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\DescribeMmAppResponseBody\bindingConfig;

use AlibabaCloud\Dara\Model;

class mcps extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string[]
     */
    public $toolList;
    protected $_name = [
        'code' => 'Code',
        'toolList' => 'ToolList',
    ];

    public function validate()
    {
        if (\is_array($this->toolList)) {
            Model::validateArray($this->toolList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->toolList) {
            if (\is_array($this->toolList)) {
                $res['ToolList'] = [];
                $n1 = 0;
                foreach ($this->toolList as $item1) {
                    $res['ToolList'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['ToolList'])) {
            if (!empty($map['ToolList'])) {
                $model->toolList = [];
                $n1 = 0;
                foreach ($map['ToolList'] as $item1) {
                    $model->toolList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
