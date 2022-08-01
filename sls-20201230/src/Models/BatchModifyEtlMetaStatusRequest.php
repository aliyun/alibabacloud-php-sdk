<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class BatchModifyEtlMetaStatusRequest extends Model
{
    /**
     * @var string[]
     */
    public $etlMetaKeyList;

    /**
     * @var string
     */
    public $etlMetaName;

    /**
     * @var string
     */
    public $etlMetaTag;

    /**
     * @var string
     */
    public $range;

    /**
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
