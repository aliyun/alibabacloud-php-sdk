<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class GetWorkspaceRequest extends Model
{
    /**
     * @var string
     */
    public $extraVerboseFields;

    /**
     * @var bool
     */
    public $verbose;
    protected $_name = [
        'extraVerboseFields' => 'ExtraVerboseFields',
        'verbose' => 'Verbose',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extraVerboseFields) {
            $res['ExtraVerboseFields'] = $this->extraVerboseFields;
        }

        if (null !== $this->verbose) {
            $res['Verbose'] = $this->verbose;
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
        if (isset($map['ExtraVerboseFields'])) {
            $model->extraVerboseFields = $map['ExtraVerboseFields'];
        }

        if (isset($map['Verbose'])) {
            $model->verbose = $map['Verbose'];
        }

        return $model;
    }
}
