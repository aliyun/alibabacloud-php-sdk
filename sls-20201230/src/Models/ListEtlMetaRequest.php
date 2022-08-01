<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class ListEtlMetaRequest extends Model
{
    /**
     * @var string
     */
    public $etlMetaKey;

    /**
     * @var string
     */
    public $etlMetaName;

    /**
     * @var string
     */
    public $etlMetaTag;

    /**
     * @var int
     */
    public $offset;

    /**
     * @var int
     */
    public $size;
    protected $_name = [
        'etlMetaKey'  => 'etlMetaKey',
        'etlMetaName' => 'etlMetaName',
        'etlMetaTag'  => 'etlMetaTag',
        'offset'      => 'offset',
        'size'        => 'size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->etlMetaKey) {
            $res['etlMetaKey'] = $this->etlMetaKey;
        }
        if (null !== $this->etlMetaName) {
            $res['etlMetaName'] = $this->etlMetaName;
        }
        if (null !== $this->etlMetaTag) {
            $res['etlMetaTag'] = $this->etlMetaTag;
        }
        if (null !== $this->offset) {
            $res['offset'] = $this->offset;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEtlMetaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['etlMetaKey'])) {
            $model->etlMetaKey = $map['etlMetaKey'];
        }
        if (isset($map['etlMetaName'])) {
            $model->etlMetaName = $map['etlMetaName'];
        }
        if (isset($map['etlMetaTag'])) {
            $model->etlMetaTag = $map['etlMetaTag'];
        }
        if (isset($map['offset'])) {
            $model->offset = $map['offset'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        return $model;
    }
}
