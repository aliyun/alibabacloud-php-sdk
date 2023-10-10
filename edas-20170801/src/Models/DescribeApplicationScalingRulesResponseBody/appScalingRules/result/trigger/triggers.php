<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\DescribeApplicationScalingRulesResponseBody\appScalingRules\result\trigger;

use AlibabaCloud\Tea\Model;

class triggers extends Model
{
    /**
     * @description The metadata of the trigger.
     *
     * @example {"dryRun":true}
     *
     * @var string
     */
    public $metaData;

    /**
     * @description The name of the trigger.
     *
     * @example cron-trigger
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of the trigger. Valid values: cron and app_metric.
     *
     * @example cron
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'metaData' => 'MetaData',
        'name'     => 'Name',
        'type'     => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metaData) {
            $res['MetaData'] = $this->metaData;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return triggers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MetaData'])) {
            $model->metaData = $map['MetaData'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
