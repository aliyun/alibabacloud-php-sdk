<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerAppResourceStatusResponseBody;

use AlibabaCloud\Dara\Model;

class regions extends Model
{
    /**
     * @var bool
     */
    public $isOffline;

    /**
     * @var bool
     */
    public $isStaging;

    /**
     * @var string
     */
    public $isp;

    /**
     * @var int
     */
    public $ready;

    /**
     * @var string
     */
    public $region;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'isOffline' => 'IsOffline',
        'isStaging' => 'IsStaging',
        'isp' => 'Isp',
        'ready' => 'Ready',
        'region' => 'Region',
        'total' => 'Total',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isOffline) {
            $res['IsOffline'] = $this->isOffline;
        }

        if (null !== $this->isStaging) {
            $res['IsStaging'] = $this->isStaging;
        }

        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }

        if (null !== $this->ready) {
            $res['Ready'] = $this->ready;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['IsOffline'])) {
            $model->isOffline = $map['IsOffline'];
        }

        if (isset($map['IsStaging'])) {
            $model->isStaging = $map['IsStaging'];
        }

        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }

        if (isset($map['Ready'])) {
            $model->ready = $map['Ready'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
