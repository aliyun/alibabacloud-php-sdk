<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\InvokeMotorModelResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $structList;
    protected $_name = [
        'structList' => 'StructList',
    ];

    public function validate()
    {
        Model::validateRequired('structList', $this->structList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->structList) {
            $res['StructList'] = $this->structList;
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
        if (isset($map['StructList'])) {
            $model->structList = $map['StructList'];
        }

        return $model;
    }
}
