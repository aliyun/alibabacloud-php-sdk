<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeFailoverTestJobsRequest;

use AlibabaCloud\Tea\Model;

class filter extends Model
{
    /**
     * @description The filter key. Valid values:
     *
     *   **JobId**
     *   **JobName**
     *   **JobStatus**
     *   **ResourceId**
     *   **ResourceName**
     *   **ResourceType**
     *
     * > You can specify at most five different filter keys. If you specify ResourceId or ResourceName, you must also specify ResourceType. The logical operator among the filter keys is AND. Results that meet all specified filter keys are returned.
     *
     * @example JobId
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of the filter key.
     *
     * > You can specify at most five filter values for each filter key. The logical operator among filter values is OR. If a filter value is matched, the filter key is considered matched.
     *
     * @var string[]
     */
    public $value;
    protected $_name = [
        'key' => 'Key',
        'value' => 'Value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return filter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Value'])) {
            if (!empty($map['Value'])) {
                $model->value = $map['Value'];
            }
        }

        return $model;
    }
}
