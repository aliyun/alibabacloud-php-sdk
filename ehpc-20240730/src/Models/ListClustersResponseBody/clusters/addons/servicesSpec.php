<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListClustersResponseBody\clusters\addons;

use AlibabaCloud\Dara\Model;

class servicesSpec extends Model
{
    /**
     * @var string
     */
    public $serviceAccessType;
    /**
     * @var string
     */
    public $serviceAccessUrl;
    /**
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'serviceAccessType' => 'ServiceAccessType',
        'serviceAccessUrl'  => 'ServiceAccessUrl',
        'serviceName'       => 'ServiceName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->serviceAccessType) {
            $res['ServiceAccessType'] = $this->serviceAccessType;
        }

        if (null !== $this->serviceAccessUrl) {
            $res['ServiceAccessUrl'] = $this->serviceAccessUrl;
        }

        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
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
        if (isset($map['ServiceAccessType'])) {
            $model->serviceAccessType = $map['ServiceAccessType'];
        }

        if (isset($map['ServiceAccessUrl'])) {
            $model->serviceAccessUrl = $map['ServiceAccessUrl'];
        }

        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        return $model;
    }
}
