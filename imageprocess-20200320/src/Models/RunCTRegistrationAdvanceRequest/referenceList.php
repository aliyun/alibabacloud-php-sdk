<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\RunCTRegistrationAdvanceRequest;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class referenceList extends Model
{
    /**
     * @example https://medclients-sh.oss-cn-shanghai.aliyuncs.com/demo/registration/ref/33_P18.4.1.dcm
     *
     * @var Stream
     */
    public $referenceURLObject;
    protected $_name = [
        'referenceURLObject' => 'ReferenceURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->referenceURLObject) {
            $res['ReferenceURL'] = $this->referenceURLObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return referenceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReferenceURL'])) {
            $model->referenceURLObject = $map['ReferenceURL'];
        }

        return $model;
    }
}
