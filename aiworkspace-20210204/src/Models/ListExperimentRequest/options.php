<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListExperimentRequest;

use AlibabaCloud\Dara\Model;

class options extends Model
{
    /**
     * @var string
     */
    public $matchNameExactly;
    protected $_name = [
        'matchNameExactly' => 'match_name_exactly',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->matchNameExactly) {
            $res['match_name_exactly'] = $this->matchNameExactly;
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
        if (isset($map['match_name_exactly'])) {
            $model->matchNameExactly = $map['match_name_exactly'];
        }

        return $model;
    }
}
