<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Tea\Model;

class ResendPromoteResourceAccountEmailRequest extends Model
{
    /**
     * @var string
     */
    public $recordId;
    protected $_name = [
        'recordId' => 'RecordId',
    ];

    public function validate()
    {
        Model::validateRequired('recordId', $this->recordId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResendPromoteResourceAccountEmailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }

        return $model;
    }
}
