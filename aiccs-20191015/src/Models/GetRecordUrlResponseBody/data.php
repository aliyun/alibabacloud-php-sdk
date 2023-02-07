<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetRecordUrlResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1001067****
     *
     * @var string
     */
    public $acid;

    /**
     * @example http://aliccrec-shvpc.oss-cn-shanghai.aliyuncs.com/accrec_tmp/10010679716-12-01-56.wav?***
     *
     * @var string
     */
    public $ossLink;
    protected $_name = [
        'acid'    => 'Acid',
        'ossLink' => 'OssLink',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acid) {
            $res['Acid'] = $this->acid;
        }
        if (null !== $this->ossLink) {
            $res['OssLink'] = $this->ossLink;
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
        if (isset($map['Acid'])) {
            $model->acid = $map['Acid'];
        }
        if (isset($map['OssLink'])) {
            $model->ossLink = $map['OssLink'];
        }

        return $model;
    }
}
