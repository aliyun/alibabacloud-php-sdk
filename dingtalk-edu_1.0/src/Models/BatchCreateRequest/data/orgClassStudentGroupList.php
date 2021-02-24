<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vedu_1_0\Models\BatchCreateRequest\data;

use AlibabaCloud\SDK\Dingtalk\Vedu_1_0\Models\BatchCreateRequest\data\orgClassStudentGroupList\classList;
use AlibabaCloud\Tea\Model;

class orgClassStudentGroupList extends Model
{
    /**
     * @description 组织id
     *
     * @var string
     */
    public $corpId;

    /**
     * @description 班级列表
     *
     * @var classList[]
     */
    public $classList;
    protected $_name = [
        'corpId'    => 'corpId',
        'classList' => 'classList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['corpId'] = $this->corpId;
        }
        if (null !== $this->classList) {
            $res['classList'] = [];
            if (null !== $this->classList && \is_array($this->classList)) {
                $n = 0;
                foreach ($this->classList as $item) {
                    $res['classList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return orgClassStudentGroupList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['corpId'])) {
            $model->corpId = $map['corpId'];
        }
        if (isset($map['classList'])) {
            if (!empty($map['classList'])) {
                $model->classList = [];
                $n                = 0;
                foreach ($map['classList'] as $item) {
                    $model->classList[$n++] = null !== $item ? classList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
