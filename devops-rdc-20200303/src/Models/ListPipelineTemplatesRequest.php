<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models;

use AlibabaCloud\Tea\Model;

class ListPipelineTemplatesRequest extends Model
{
    /**
     * @var string
     */
    public $orgId;

    /**
     * @description 本次读取的最大数据记录数量
     *
     * @var int
     */
    public $pageStart;

    /**
     * @description 本次读取的最大数据记录数量
     *
     * @var int
     */
    public $pageNum;
    protected $_name = [
        'orgId'     => 'OrgId',
        'pageStart' => 'PageStart',
        'pageNum'   => 'PageNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }
        if (null !== $this->pageStart) {
            $res['PageStart'] = $this->pageStart;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPipelineTemplatesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }
        if (isset($map['PageStart'])) {
            $model->pageStart = $map['PageStart'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }

        return $model;
    }
}
