<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models;

use AlibabaCloud\Tea\Model;

class ListSchemeTaskConfigRequest extends Model
{
    /**
     * @description baseMeAgentId
     *
     * @var int
     */
    public $baseMeAgentId;

    /**
     * @example {"pageNumber":1,"pageSize":10,"sourceDataType":"1"}
     *
     * @var string
     */
    public $jsonStr;
    protected $_name = [
        'baseMeAgentId' => 'BaseMeAgentId',
        'jsonStr'       => 'jsonStr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseMeAgentId) {
            $res['BaseMeAgentId'] = $this->baseMeAgentId;
        }
        if (null !== $this->jsonStr) {
            $res['jsonStr'] = $this->jsonStr;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSchemeTaskConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaseMeAgentId'])) {
            $model->baseMeAgentId = $map['BaseMeAgentId'];
        }
        if (isset($map['jsonStr'])) {
            $model->jsonStr = $map['jsonStr'];
        }

        return $model;
    }
}
