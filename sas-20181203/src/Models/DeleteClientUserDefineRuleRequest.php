<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DeleteClientUserDefineRuleRequest extends Model
{
    /**
     * @var int[]
     */
    public $idList;
    protected $_name = [
        'idList' => 'IdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->idList) {
            $res['IdList'] = $this->idList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteClientUserDefineRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IdList'])) {
            if (!empty($map['IdList'])) {
                $model->idList = $map['IdList'];
            }
        }

        return $model;
    }
}
