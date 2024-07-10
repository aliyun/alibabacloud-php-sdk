<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models\RunContractRuleGenerationRequest\assistant;

use AlibabaCloud\Tea\Model;

class metaData extends Model
{
    /**
     * @example 9a6b1ba60d9944249363ec3cc1529b7b
     *
     * @var string
     */
    public $fileId;

    /**
     * @example 1
     *
     * @var string
     */
    public $position;
    protected $_name = [
        'fileId'   => 'fileId',
        'position' => 'position',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileId) {
            $res['fileId'] = $this->fileId;
        }
        if (null !== $this->position) {
            $res['position'] = $this->position;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metaData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fileId'])) {
            $model->fileId = $map['fileId'];
        }
        if (isset($map['position'])) {
            $model->position = $map['position'];
        }

        return $model;
    }
}
