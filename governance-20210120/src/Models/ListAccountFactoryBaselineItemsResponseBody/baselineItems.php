<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models\ListAccountFactoryBaselineItemsResponseBody;

use AlibabaCloud\SDK\Governance\V20210120\Models\ListAccountFactoryBaselineItemsResponseBody\baselineItems\dependsOn;
use AlibabaCloud\Tea\Model;

class baselineItems extends Model
{
    /**
     * @description The dependency of the baseline item.
     *
     * @var dependsOn[]
     */
    public $dependsOn;

    /**
     * @description The description of the baseline item.
     *
     * @example Notification.
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the baseline item.
     *
     * @example ACS-BP_ACCOUNT_FACTORY_ACCOUNT_NOTIFICATION
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of the baseline item.
     *
     * @example AccountFactory
     *
     * @var string
     */
    public $type;

    /**
     * @description The version of the baseline item.
     *
     * @example 1.0
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'dependsOn'   => 'DependsOn',
        'description' => 'Description',
        'name'        => 'Name',
        'type'        => 'Type',
        'version'     => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dependsOn) {
            $res['DependsOn'] = [];
            if (null !== $this->dependsOn && \is_array($this->dependsOn)) {
                $n = 0;
                foreach ($this->dependsOn as $item) {
                    $res['DependsOn'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return baselineItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DependsOn'])) {
            if (!empty($map['DependsOn'])) {
                $model->dependsOn = [];
                $n                = 0;
                foreach ($map['DependsOn'] as $item) {
                    $model->dependsOn[$n++] = null !== $item ? dependsOn::fromMap($item) : $item;
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
