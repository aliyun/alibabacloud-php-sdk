<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeManagedClustersResponseBody\clusters;

use AlibabaCloud\Tea\Model;

class status extends Model
{
    /**
     * @description Query the clusters that are associated with a master instance.
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $message;

    /**
     * @description You can call the DescribeManagedClusters operation to query the clusters that are associated with a master instance.
     *
     * @example Successed
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'message' => 'Message',
        'state'   => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return status
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
