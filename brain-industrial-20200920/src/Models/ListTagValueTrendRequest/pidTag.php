<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ListTagValueTrendRequest;

use AlibabaCloud\Tea\Model;

class pidTag extends Model
{
    /**
     * @var string
     */
    public $pidTagId;
    protected $_name = [
        'pidTagId' => 'PidTagId',
    ];

    public function validate()
    {
        Model::validateRequired('pidTagId', $this->pidTagId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pidTagId) {
            $res['PidTagId'] = $this->pidTagId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pidTag
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PidTagId'])) {
            $model->pidTagId = $map['PidTagId'];
        }

        return $model;
    }
}
