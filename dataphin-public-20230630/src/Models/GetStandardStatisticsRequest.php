<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetStandardStatisticsRequest\statisticsQuery;

class GetStandardStatisticsRequest extends Model
{
    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var statisticsQuery
     */
    public $statisticsQuery;
    protected $_name = [
        'opTenantId' => 'OpTenantId',
        'statisticsQuery' => 'StatisticsQuery',
    ];

    public function validate()
    {
        if (null !== $this->statisticsQuery) {
            $this->statisticsQuery->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        if (null !== $this->statisticsQuery) {
            $res['StatisticsQuery'] = null !== $this->statisticsQuery ? $this->statisticsQuery->toArray($noStream) : $this->statisticsQuery;
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
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        if (isset($map['StatisticsQuery'])) {
            $model->statisticsQuery = statisticsQuery::fromMap($map['StatisticsQuery']);
        }

        return $model;
    }
}
