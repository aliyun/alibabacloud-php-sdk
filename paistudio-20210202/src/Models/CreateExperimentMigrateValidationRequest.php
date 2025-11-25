<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models;

use AlibabaCloud\Dara\Model;

class CreateExperimentMigrateValidationRequest extends Model
{
    /**
     * @var int
     */
    public $sourceExpId;
    protected $_name = [
        'sourceExpId' => 'SourceExpId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sourceExpId) {
            $res['SourceExpId'] = $this->sourceExpId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceExpId'])) {
            $model->sourceExpId = $map['SourceExpId'];
        }

        return $model;
    }
}
