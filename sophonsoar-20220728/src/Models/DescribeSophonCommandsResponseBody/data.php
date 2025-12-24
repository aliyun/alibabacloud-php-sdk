<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeSophonCommandsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeSophonCommandsResponseBody\data\paramConfig;

class data extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var paramConfig[]
     */
    public $paramConfig;
    protected $_name = [
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'name' => 'Name',
        'paramConfig' => 'ParamConfig',
    ];

    public function validate()
    {
        if (\is_array($this->paramConfig)) {
            Model::validateArray($this->paramConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->paramConfig) {
            if (\is_array($this->paramConfig)) {
                $res['ParamConfig'] = [];
                $n1 = 0;
                foreach ($this->paramConfig as $item1) {
                    $res['ParamConfig'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ParamConfig'])) {
            if (!empty($map['ParamConfig'])) {
                $model->paramConfig = [];
                $n1 = 0;
                foreach ($map['ParamConfig'] as $item1) {
                    $model->paramConfig[$n1] = paramConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
