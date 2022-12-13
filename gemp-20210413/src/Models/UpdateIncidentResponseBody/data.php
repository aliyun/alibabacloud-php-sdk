<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateIncidentResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2312
     *
     * @var int
     */
    public $incidentId;
    protected $_name = [
        'incidentId' => 'incidentId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->incidentId) {
            $res['incidentId'] = $this->incidentId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['incidentId'])) {
            $model->incidentId = $map['incidentId'];
        }

        return $model;
    }
}
