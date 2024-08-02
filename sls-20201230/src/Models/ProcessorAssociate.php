<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class ProcessorAssociate extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example ingest-processor-1
     *
     * @var string
     */
    public $processorId;
    protected $_name = [
        'processorId' => 'processorId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->processorId) {
            $res['processorId'] = $this->processorId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ProcessorAssociate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['processorId'])) {
            $model->processorId = $map['processorId'];
        }

        return $model;
    }
}
