<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetRecordDataResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $ossLink;

    /**
     * @var string
     */
    public $acid;
    protected $_name = [
        'ossLink' => 'OssLink',
        'acid'    => 'Acid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ossLink) {
            $res['OssLink'] = $this->ossLink;
        }
        if (null !== $this->acid) {
            $res['Acid'] = $this->acid;
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
        if (isset($map['OssLink'])) {
            $model->ossLink = $map['OssLink'];
        }
        if (isset($map['Acid'])) {
            $model->acid = $map['Acid'];
        }

        return $model;
    }
}
