<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ListTagValueTrendResponse;

use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ListTagValueTrendResponse\pidTagTrendList\pidTagValueList;
use AlibabaCloud\Tea\Model;

class pidTagTrendList extends Model
{
    /**
     * @var string
     */
    public $pidTagName;

    /**
     * @var pidTagValueList[]
     */
    public $pidTagValueList;
    protected $_name = [
        'pidTagName'      => 'PidTagName',
        'pidTagValueList' => 'PidTagValueList',
    ];

    public function validate()
    {
        Model::validateRequired('pidTagName', $this->pidTagName, true);
        Model::validateRequired('pidTagValueList', $this->pidTagValueList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pidTagName) {
            $res['PidTagName'] = $this->pidTagName;
        }
        if (null !== $this->pidTagValueList) {
            $res['PidTagValueList'] = [];
            if (null !== $this->pidTagValueList && \is_array($this->pidTagValueList)) {
                $n = 0;
                foreach ($this->pidTagValueList as $item) {
                    $res['PidTagValueList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pidTagTrendList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PidTagName'])) {
            $model->pidTagName = $map['PidTagName'];
        }
        if (isset($map['PidTagValueList'])) {
            if (!empty($map['PidTagValueList'])) {
                $model->pidTagValueList = [];
                $n                      = 0;
                foreach ($map['PidTagValueList'] as $item) {
                    $model->pidTagValueList[$n++] = null !== $item ? pidTagValueList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
