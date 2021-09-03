<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\TriggerRepositoryMirrorSyncResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 仓库同步触发结果
     *
     * @var bool
     */
    public $result;
    protected $_name = [
        'result' => 'Result',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        return $model;
    }
}
