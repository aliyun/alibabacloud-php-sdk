<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListPrometheusDashboardsResponseBody\prometheusDashboards;

class ListPrometheusDashboardsResponseBody extends Model
{
    /**
     * @var prometheusDashboards[]
     */
    public $prometheusDashboards;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'prometheusDashboards' => 'prometheusDashboards',
        'requestId' => 'requestId',
        'totalCount' => 'totalCount',
    ];

    public function validate()
    {
        if (\is_array($this->prometheusDashboards)) {
            Model::validateArray($this->prometheusDashboards);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->prometheusDashboards) {
            if (\is_array($this->prometheusDashboards)) {
                $res['prometheusDashboards'] = [];
                $n1 = 0;
                foreach ($this->prometheusDashboards as $item1) {
                    $res['prometheusDashboards'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
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
        if (isset($map['prometheusDashboards'])) {
            if (!empty($map['prometheusDashboards'])) {
                $model->prometheusDashboards = [];
                $n1 = 0;
                foreach ($map['prometheusDashboards'] as $item1) {
                    $model->prometheusDashboards[$n1] = prometheusDashboards::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
