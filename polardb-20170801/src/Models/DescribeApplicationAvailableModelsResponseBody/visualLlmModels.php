<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationAvailableModelsResponseBody;

use AlibabaCloud\Dara\Model;

class visualLlmModels extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $supportedModalities;
    protected $_name = [
        'name' => 'Name',
        'supportedModalities' => 'SupportedModalities',
    ];

    public function validate()
    {
        if (\is_array($this->supportedModalities)) {
            Model::validateArray($this->supportedModalities);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->supportedModalities) {
            if (\is_array($this->supportedModalities)) {
                $res['SupportedModalities'] = [];
                $n1 = 0;
                foreach ($this->supportedModalities as $item1) {
                    $res['SupportedModalities'][$n1] = $item1;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['SupportedModalities'])) {
            if (!empty($map['SupportedModalities'])) {
                $model->supportedModalities = [];
                $n1 = 0;
                foreach ($map['SupportedModalities'] as $item1) {
                    $model->supportedModalities[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
