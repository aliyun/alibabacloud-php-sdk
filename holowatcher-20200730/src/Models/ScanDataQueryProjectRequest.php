<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\Tea\Model;

class ScanDataQueryProjectRequest extends Model
{
    /**
     * @description 业务幂等ID，用于防止重复请求，写操作必传
     *
     * @var string
     */
    public $bizOrderNo;

    /**
     * @description 查询的项目ID
     *
     * @var int
     */
    public $projectId;

    /**
     * @description 数据源，目前只有3VJIA，需要新增请联系接口owner
     *
     * @var string
     */
    public $source;
    protected $_name = [
        'bizOrderNo' => 'BizOrderNo',
        'projectId'  => 'ProjectId',
        'source'     => 'Source',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizOrderNo) {
            $res['BizOrderNo'] = $this->bizOrderNo;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ScanDataQueryProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizOrderNo'])) {
            $model->bizOrderNo = $map['BizOrderNo'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
