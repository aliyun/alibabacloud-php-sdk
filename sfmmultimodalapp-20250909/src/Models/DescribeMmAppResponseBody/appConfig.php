<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\DescribeMmAppResponseBody;

use AlibabaCloud\Dara\Model;

class appConfig extends Model
{
    /**
     * @var bool
     */
    public $enableTransition;
    protected $_name = [
        'enableTransition' => 'EnableTransition',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableTransition) {
            $res['EnableTransition'] = $this->enableTransition;
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
        if (isset($map['EnableTransition'])) {
            $model->enableTransition = $map['EnableTransition'];
        }

        return $model;
    }
}
