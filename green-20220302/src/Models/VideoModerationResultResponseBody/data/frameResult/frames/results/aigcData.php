<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data\frameResult\frames\results;

use AlibabaCloud\Dara\Model;

class aigcData extends Model
{
    /**
     * @var string
     */
    public $explain;
    protected $_name = [
        'explain' => 'Explain',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->explain) {
            $res['Explain'] = $this->explain;
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
        if (isset($map['Explain'])) {
            $model->explain = $map['Explain'];
        }

        return $model;
    }
}
