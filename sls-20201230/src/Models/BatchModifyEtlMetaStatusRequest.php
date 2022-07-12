<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class BatchModifyEtlMetaStatusRequest extends Model
{
    /**
     * @description 当 range 的值为 "list" 时有效，匹配list中的 metaKey
     *
     * @var string[]
     */
    public $etlMetaKeyList;

    /**
     * @var string
     */
    public $etlMetaName;

    /**
     * @description 匹配的 tag，当 tag 为 "__all_etl_meta_tag_match__" 时表示全部匹配。
     *
     * @var string
     */
    public $etlMetaTag;

    /**
     * @description 操作作用的范围，可选 all 代表匹配全部，list 按名单列表匹配 key 两种模式。
     *
     * @var string
     */
    public $range;

    /**
     * @description 操作类型，支持启用、禁用、删除三种，即 batch_enable、batch_disable、batch_delete。
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'etlMetaKeyList' => 'etlMetaKeyList',
        'etlMetaName'    => 'etlMetaName',
        'etlMetaTag'     => 'etlMetaTag',
        'range'          => 'range',
        'type'           => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->etlMetaKeyList) {
            $res['etlMetaKeyList'] = $this->etlMetaKeyList;
        }
        if (null !== $this->etlMetaName) {
            $res['etlMetaName'] = $this->etlMetaName;
        }
        if (null !== $this->etlMetaTag) {
            $res['etlMetaTag'] = $this->etlMetaTag;
        }
        if (null !== $this->range) {
            $res['range'] = $this->range;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchModifyEtlMetaStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['etlMetaKeyList'])) {
            if (!empty($map['etlMetaKeyList'])) {
                $model->etlMetaKeyList = $map['etlMetaKeyList'];
            }
        }
        if (isset($map['etlMetaName'])) {
            $model->etlMetaName = $map['etlMetaName'];
        }
        if (isset($map['etlMetaTag'])) {
            $model->etlMetaTag = $map['etlMetaTag'];
        }
        if (isset($map['range'])) {
            $model->range = $map['range'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
