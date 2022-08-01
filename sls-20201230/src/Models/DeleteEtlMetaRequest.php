<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class DeleteEtlMetaRequest extends Model
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
    protected $_name = [
        'etlMetaKey'  => 'etlMetaKey',
        'etlMetaName' => 'etlMetaName',
        'etlMetaTag'  => 'etlMetaTag',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteEtlMetaRequest
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

        return $model;
    }
}
