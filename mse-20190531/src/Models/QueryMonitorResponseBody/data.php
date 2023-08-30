<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\QueryMonitorResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example mse-xxxx-xxxxxx
     *
     * @var string
     */
    public $clusterNamePrefix;

    /**
     * @description The request was successfully processed.
     *
     * @example mse-xxxxxx-xxxxxx-reg-center-0-0
     *
     * @var string
     */
    public $podName;

    /**
     * @description The details of the data.
     *
     * @var mixed[][]
     */
    public $values;
    protected $_name = [
        'clusterNamePrefix' => 'clusterNamePrefix',
        'podName'           => 'podName',
        'values'            => 'values',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterNamePrefix) {
            $res['clusterNamePrefix'] = $this->clusterNamePrefix;
        }
        if (null !== $this->podName) {
            $res['podName'] = $this->podName;
        }
        if (null !== $this->values) {
            $res['values'] = $this->values;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clusterNamePrefix'])) {
            $model->clusterNamePrefix = $map['clusterNamePrefix'];
        }
        if (isset($map['podName'])) {
            $model->podName = $map['podName'];
        }
        if (isset($map['values'])) {
            if (!empty($map['values'])) {
                $model->values = $map['values'];
            }
        }

        return $model;
    }
}
