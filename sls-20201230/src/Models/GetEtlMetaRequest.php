<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class GetEtlMetaRequest extends Model
{
    /**
     * @var string
     */
    public $elMetaName;

    /**
     * @var string
     */
    public $etlMetaKey;

    /**
     * @description 此处固定为 "__all_etl_meta_tag_match__"。
     *
     * @var string
     */
    public $etlMetaTag;
    protected $_name = [
        'elMetaName' => 'elMetaName',
        'etlMetaKey' => 'etlMetaKey',
        'etlMetaTag' => 'etlMetaTag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->elMetaName) {
            $res['elMetaName'] = $this->elMetaName;
        }
        if (null !== $this->etlMetaKey) {
            $res['etlMetaKey'] = $this->etlMetaKey;
        }
        if (null !== $this->etlMetaTag) {
            $res['etlMetaTag'] = $this->etlMetaTag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetEtlMetaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['elMetaName'])) {
            $model->elMetaName = $map['elMetaName'];
        }
        if (isset($map['etlMetaKey'])) {
            $model->etlMetaKey = $map['etlMetaKey'];
        }
        if (isset($map['etlMetaTag'])) {
            $model->etlMetaTag = $map['etlMetaTag'];
        }

        return $model;
    }
}
