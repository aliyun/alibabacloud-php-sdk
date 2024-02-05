<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20230701\Models\GetJobResponseBody\jobInfo\tasks\taskSpec\taskExecutor;

use AlibabaCloud\Tea\Model;

class VM extends Model
{
    /**
     * @example m-xxxx
     *
     * @var string
     */
    public $image;

    /**
     * @example ZWNobyAiMTIzNCIgPiBgZGF0ZSArJXNg
     *
     * @var string
     */
    public $prologScript;
    protected $_name = [
        'image'        => 'Image',
        'prologScript' => 'PrologScript',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->prologScript) {
            $res['PrologScript'] = $this->prologScript;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VM
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }
        if (isset($map['PrologScript'])) {
            $model->prologScript = $map['PrologScript'];
        }

        return $model;
    }
}
