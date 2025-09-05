<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\ExtractFingerPrintResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $fingerPrint;
    protected $_name = [
        'fingerPrint' => 'FingerPrint',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fingerPrint) {
            $res['FingerPrint'] = $this->fingerPrint;
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
        if (isset($map['FingerPrint'])) {
            $model->fingerPrint = $map['FingerPrint'];
        }

        return $model;
    }
}
