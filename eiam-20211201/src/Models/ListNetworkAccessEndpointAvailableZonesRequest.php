<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class ListNetworkAccessEndpointAvailableZonesRequest extends Model
{
    /**
     * @var string
     */
    public $naeRegionId;
    protected $_name = [
        'naeRegionId' => 'NaeRegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->naeRegionId) {
            $res['NaeRegionId'] = $this->naeRegionId;
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
        if (isset($map['NaeRegionId'])) {
            $model->naeRegionId = $map['NaeRegionId'];
        }

        return $model;
    }
}
