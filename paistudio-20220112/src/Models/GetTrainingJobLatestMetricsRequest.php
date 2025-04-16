<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class GetTrainingJobLatestMetricsRequest extends Model
{
    /**
     * @var string
     */
    public $names;
    protected $_name = [
        'names' => 'Names',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->names) {
            $res['Names'] = $this->names;
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
        if (isset($map['Names'])) {
            $model->names = $map['Names'];
        }

        return $model;
    }
}
