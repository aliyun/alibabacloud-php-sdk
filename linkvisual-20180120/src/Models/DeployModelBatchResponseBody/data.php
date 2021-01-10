<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\DeployModelBatchResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var mixed[][]
     */
    public $deployTaskResultVOList;
    protected $_name = [
        'deployTaskResultVOList' => 'DeployTaskResultVOList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deployTaskResultVOList) {
            $res['DeployTaskResultVOList'] = $this->deployTaskResultVOList;
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
        if (isset($map['DeployTaskResultVOList'])) {
            if (!empty($map['DeployTaskResultVOList'])) {
                $model->deployTaskResultVOList = $map['DeployTaskResultVOList'];
            }
        }

        return $model;
    }
}
