<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeOpenSearchConnectionInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeOpenSearchConnectionInfoResponseBody\data\dashboardEndpoint;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeOpenSearchConnectionInfoResponseBody\data\dashboardPublicEndpoint;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeOpenSearchConnectionInfoResponseBody\data\privateEndpoint;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeOpenSearchConnectionInfoResponseBody\data\publicEndpoint;

class data extends Model
{
    /**
     * @var dashboardEndpoint
     */
    public $dashboardEndpoint;

    /**
     * @var dashboardPublicEndpoint
     */
    public $dashboardPublicEndpoint;

    /**
     * @var string
     */
    public $defaultUsername;

    /**
     * @var privateEndpoint
     */
    public $privateEndpoint;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var publicEndpoint
     */
    public $publicEndpoint;
    protected $_name = [
        'dashboardEndpoint' => 'DashboardEndpoint',
        'dashboardPublicEndpoint' => 'DashboardPublicEndpoint',
        'defaultUsername' => 'DefaultUsername',
        'privateEndpoint' => 'PrivateEndpoint',
        'protocol' => 'Protocol',
        'publicEndpoint' => 'PublicEndpoint',
    ];

    public function validate()
    {
        if (null !== $this->dashboardEndpoint) {
            $this->dashboardEndpoint->validate();
        }
        if (null !== $this->dashboardPublicEndpoint) {
            $this->dashboardPublicEndpoint->validate();
        }
        if (null !== $this->privateEndpoint) {
            $this->privateEndpoint->validate();
        }
        if (null !== $this->publicEndpoint) {
            $this->publicEndpoint->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dashboardEndpoint) {
            $res['DashboardEndpoint'] = null !== $this->dashboardEndpoint ? $this->dashboardEndpoint->toArray($noStream) : $this->dashboardEndpoint;
        }

        if (null !== $this->dashboardPublicEndpoint) {
            $res['DashboardPublicEndpoint'] = null !== $this->dashboardPublicEndpoint ? $this->dashboardPublicEndpoint->toArray($noStream) : $this->dashboardPublicEndpoint;
        }

        if (null !== $this->defaultUsername) {
            $res['DefaultUsername'] = $this->defaultUsername;
        }

        if (null !== $this->privateEndpoint) {
            $res['PrivateEndpoint'] = null !== $this->privateEndpoint ? $this->privateEndpoint->toArray($noStream) : $this->privateEndpoint;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->publicEndpoint) {
            $res['PublicEndpoint'] = null !== $this->publicEndpoint ? $this->publicEndpoint->toArray($noStream) : $this->publicEndpoint;
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
        if (isset($map['DashboardEndpoint'])) {
            $model->dashboardEndpoint = dashboardEndpoint::fromMap($map['DashboardEndpoint']);
        }

        if (isset($map['DashboardPublicEndpoint'])) {
            $model->dashboardPublicEndpoint = dashboardPublicEndpoint::fromMap($map['DashboardPublicEndpoint']);
        }

        if (isset($map['DefaultUsername'])) {
            $model->defaultUsername = $map['DefaultUsername'];
        }

        if (isset($map['PrivateEndpoint'])) {
            $model->privateEndpoint = privateEndpoint::fromMap($map['PrivateEndpoint']);
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['PublicEndpoint'])) {
            $model->publicEndpoint = publicEndpoint::fromMap($map['PublicEndpoint']);
        }

        return $model;
    }
}
