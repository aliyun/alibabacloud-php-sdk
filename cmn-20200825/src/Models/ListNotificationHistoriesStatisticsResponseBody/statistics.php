<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\ListNotificationHistoriesStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class statistics extends Model
{
    /**
     * @example 10
     *
     * @var string
     */
    public $count;

    /**
     * @var string
     */
    public $name;

    /**
     * @example space-1wedcwv13wdec
     *
     * @var string
     */
    public $resourceId;
    protected $_name = [
        'count'      => 'Count',
        'name'       => 'Name',
        'resourceId' => 'ResourceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statistics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        return $model;
    }
}
