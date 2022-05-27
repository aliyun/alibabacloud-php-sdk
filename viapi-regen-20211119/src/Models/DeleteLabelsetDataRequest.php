<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapiregen\V20211119\Models;

use AlibabaCloud\Tea\Model;

class DeleteLabelsetDataRequest extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $labelId;
    protected $_name = [
        'id'      => 'Id',
        'labelId' => 'LabelId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->labelId) {
            $res['LabelId'] = $this->labelId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteLabelsetDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LabelId'])) {
            $model->labelId = $map['LabelId'];
        }

        return $model;
    }
}
