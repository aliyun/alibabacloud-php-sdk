<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class ListDictsRequest extends Model
{
    /**
     * @description The type of the dictionary. Valid values:
     *
     *   IK: IK dictionary after a standard update
     *   IK_HOT: IK dictionary after a rolling update
     *   SYNONYMS: synonym dictionary
     *   ALIWS: Alibaba Cloud dictionary
     *
     * This parameter is required.
     * @example IK
     *
     * @var string
     */
    public $analyzerType;

    /**
     * @description The name of the dictionary file.
     *
     * @example SYSTEM_MAIN.dic
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'analyzerType' => 'analyzerType',
        'name'         => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->analyzerType) {
            $res['analyzerType'] = $this->analyzerType;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDictsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['analyzerType'])) {
            $model->analyzerType = $map['analyzerType'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
