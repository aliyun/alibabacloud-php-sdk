<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDashboardNl2sqlResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string[]
     */
    public $authorities;

    /**
     * @var string
     */
    public $dashboardName;

    /**
     * @var string
     */
    public $dashboardNl2sqlId;

    /**
     * @var string
     */
    public $ownerId;
    protected $_name = [
        'authorities' => 'Authorities',
        'dashboardName' => 'DashboardName',
        'dashboardNl2sqlId' => 'DashboardNl2sqlId',
        'ownerId' => 'OwnerId',
    ];

    public function validate()
    {
        if (\is_array($this->authorities)) {
            Model::validateArray($this->authorities);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorities) {
            if (\is_array($this->authorities)) {
                $res['Authorities'] = [];
                $n1 = 0;
                foreach ($this->authorities as $item1) {
                    $res['Authorities'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dashboardName) {
            $res['DashboardName'] = $this->dashboardName;
        }

        if (null !== $this->dashboardNl2sqlId) {
            $res['DashboardNl2sqlId'] = $this->dashboardNl2sqlId;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
        if (isset($map['Authorities'])) {
            if (!empty($map['Authorities'])) {
                $model->authorities = [];
                $n1 = 0;
                foreach ($map['Authorities'] as $item1) {
                    $model->authorities[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DashboardName'])) {
            $model->dashboardName = $map['DashboardName'];
        }

        if (isset($map['DashboardNl2sqlId'])) {
            $model->dashboardNl2sqlId = $map['DashboardNl2sqlId'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        return $model;
    }
}
