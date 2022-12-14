<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\ExtractFingerPrintResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example /9j/4AAQSkZJRgABAQAAAQABAAD****
     *
     * @var int[]
     */
    public $fingerPrint;
    protected $_name = [
        'fingerPrint' => 'FingerPrint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fingerPrint) {
            $res['FingerPrint'] = $this->fingerPrint;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FingerPrint'])) {
            $model->fingerPrint = $map['FingerPrint'];
        }

        return $model;
    }
}
