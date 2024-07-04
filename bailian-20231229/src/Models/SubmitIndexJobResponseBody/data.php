<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\SubmitIndexJobResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example eFDr2fGRzP9gdDZWAdo3YQ==
     *
     * @var string
     */
    public $id;

    /**
     * @example khdyak1uuj
     *
     * @var string
     */
    public $indexId;
    protected $_name = [
        'id'      => 'Id',
        'indexId' => 'IndexId',
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
        if (null !== $this->indexId) {
            $res['IndexId'] = $this->indexId;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IndexId'])) {
            $model->indexId = $map['IndexId'];
        }

        return $model;
    }
}
