<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyDashboardsResponseBody\dashboards;

class ListIntegrationPolicyDashboardsResponseBody extends Model
{
    /**
     * @var dashboards[]
     */
    public $dashboards;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'dashboards' => 'dashboards',
        'requestId' => 'requestId',
        'total' => 'total',
    ];

    public function validate()
    {
        if (\is_array($this->dashboards)) {
            Model::validateArray($this->dashboards);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dashboards) {
            if (\is_array($this->dashboards)) {
                $res['dashboards'] = [];
                $n1 = 0;
                foreach ($this->dashboards as $item1) {
                    $res['dashboards'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->total) {
            $res['total'] = $this->total;
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
        if (isset($map['dashboards'])) {
            if (!empty($map['dashboards'])) {
                $model->dashboards = [];
                $n1 = 0;
                foreach ($map['dashboards'] as $item1) {
                    $model->dashboards[$n1] = dashboards::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
