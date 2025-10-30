<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models\ListAccountFactoryBaselineItemsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Governance\V20210120\Models\ListAccountFactoryBaselineItemsResponseBody\baselineItems\dependsOn;

class baselineItems extends Model
{
    /**
     * @var dependsOn[]
     */
    public $dependsOn;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'dependsOn' => 'DependsOn',
        'description' => 'Description',
        'name' => 'Name',
        'type' => 'Type',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (\is_array($this->dependsOn)) {
            Model::validateArray($this->dependsOn);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dependsOn) {
            if (\is_array($this->dependsOn)) {
                $res['DependsOn'] = [];
                $n1 = 0;
                foreach ($this->dependsOn as $item1) {
                    $res['DependsOn'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['DependsOn'])) {
            if (!empty($map['DependsOn'])) {
                $model->dependsOn = [];
                $n1 = 0;
                foreach ($map['DependsOn'] as $item1) {
                    $model->dependsOn[$n1] = dependsOn::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
