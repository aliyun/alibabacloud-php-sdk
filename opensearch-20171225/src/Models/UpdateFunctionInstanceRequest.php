<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateFunctionInstanceRequest\createParameters;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateFunctionInstanceRequest\usageParameters;
use AlibabaCloud\Tea\Model;

class UpdateFunctionInstanceRequest extends Model
{
    /**
     * @description The parameters that are used to create the instance.
     *
     * @example {             "name": "title_field",             "value": "title"         }
     *
     * @var createParameters[]
     */
    public $createParameters;

    /**
     * @description The cron expression used to schedule periodic training, in the format of (Minutes Hours DayofMonth Month DayofWeek). The default value is empty, which indicates that no periodic training is performed. DayofWeek 0 indicates Sunday.
     *
     * @example "0 3 ? * 0,1,3,5"
     *
     * @var string
     */
    public $cron;

    /**
     * @description The description of the instance.
     *
     * @example test instance
     *
     * @var string
     */
    public $description;

    /**
     * @description The parameters that are used.
     *
     * @var usageParameters[]
     */
    public $usageParameters;
    protected $_name = [
        'createParameters' => 'createParameters',
        'cron'             => 'cron',
        'description'      => 'description',
        'usageParameters'  => 'usageParameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createParameters) {
            $res['createParameters'] = [];
            if (null !== $this->createParameters && \is_array($this->createParameters)) {
                $n = 0;
                foreach ($this->createParameters as $item) {
                    $res['createParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->cron) {
            $res['cron'] = $this->cron;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->usageParameters) {
            $res['usageParameters'] = [];
            if (null !== $this->usageParameters && \is_array($this->usageParameters)) {
                $n = 0;
                foreach ($this->usageParameters as $item) {
                    $res['usageParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateFunctionInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createParameters'])) {
            if (!empty($map['createParameters'])) {
                $model->createParameters = [];
                $n                       = 0;
                foreach ($map['createParameters'] as $item) {
                    $model->createParameters[$n++] = null !== $item ? createParameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['cron'])) {
            $model->cron = $map['cron'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['usageParameters'])) {
            if (!empty($map['usageParameters'])) {
                $model->usageParameters = [];
                $n                      = 0;
                foreach ($map['usageParameters'] as $item) {
                    $model->usageParameters[$n++] = null !== $item ? usageParameters::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
