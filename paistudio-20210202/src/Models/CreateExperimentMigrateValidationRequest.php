<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models;

use AlibabaCloud\Tea\Model;

class CreateExperimentMigrateValidationRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 123
     *
     * @var int
     */
    public $sourceExpId;
    protected $_name = [
        'sourceExpId' => 'SourceExpId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceExpId) {
            $res['SourceExpId'] = $this->sourceExpId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateExperimentMigrateValidationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceExpId'])) {
            $model->sourceExpId = $map['SourceExpId'];
        }

        return $model;
    }
}
