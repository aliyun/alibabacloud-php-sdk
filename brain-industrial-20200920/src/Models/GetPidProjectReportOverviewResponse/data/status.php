<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidProjectReportOverviewResponse\data;

use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidProjectReportOverviewResponse\data\status\all;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidProjectReportOverviewResponse\data\status\key;
use AlibabaCloud\Tea\Model;

class status extends Model
{
    /**
     * @var all
     */
    public $all;

    /**
     * @var key
     */
    public $key;
    protected $_name = [
        'all' => 'All',
        'key' => 'Key',
    ];

    public function validate()
    {
        Model::validateRequired('all', $this->all, true);
        Model::validateRequired('key', $this->key, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->all) {
            $res['All'] = null !== $this->all ? $this->all->toMap() : null;
        }
        if (null !== $this->key) {
            $res['Key'] = null !== $this->key ? $this->key->toMap() : null;
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
        if (isset($map['All'])) {
            $model->all = all::fromMap($map['All']);
        }
        if (isset($map['Key'])) {
            $model->key = key::fromMap($map['Key']);
        }

        return $model;
    }
}
