<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DistApplicationDataResponse;

use AlibabaCloud\Tea\Model;

class distInstanceIds extends Model
{
    /**
     * @var string[]
     */
    public $distInstanceId;
    protected $_name = [
        'distInstanceId' => 'DistInstanceId',
    ];

    public function validate()
    {
        Model::validateRequired('distInstanceId', $this->distInstanceId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->distInstanceId) {
            $res['DistInstanceId'] = $this->distInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return distInstanceIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DistInstanceId'])) {
            if (!empty($map['DistInstanceId'])) {
                $model->distInstanceId = $map['DistInstanceId'];
            }
        }

        return $model;
    }
}
