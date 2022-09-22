<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Docmindapi\V20220711\Models;

use AlibabaCloud\Tea\Model;

class SubmitDocumentCompareJobRequest extends Model
{
    /**
     * @var string
     */
    public $compareFileName;

    /**
     * @var string
     */
    public $compareFileUrl;

    /**
     * @var string
     */
    public $originFileName;

    /**
     * @var string
     */
    public $originFileUrl;
    protected $_name = [
        'compareFileName' => 'CompareFileName',
        'compareFileUrl'  => 'CompareFileUrl',
        'originFileName'  => 'OriginFileName',
        'originFileUrl'   => 'OriginFileUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->compareFileName) {
            $res['CompareFileName'] = $this->compareFileName;
        }
        if (null !== $this->compareFileUrl) {
            $res['CompareFileUrl'] = $this->compareFileUrl;
        }
        if (null !== $this->originFileName) {
            $res['OriginFileName'] = $this->originFileName;
        }
        if (null !== $this->originFileUrl) {
            $res['OriginFileUrl'] = $this->originFileUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitDocumentCompareJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompareFileName'])) {
            $model->compareFileName = $map['CompareFileName'];
        }
        if (isset($map['CompareFileUrl'])) {
            $model->compareFileUrl = $map['CompareFileUrl'];
        }
        if (isset($map['OriginFileName'])) {
            $model->originFileName = $map['OriginFileName'];
        }
        if (isset($map['OriginFileUrl'])) {
            $model->originFileUrl = $map['OriginFileUrl'];
        }

        return $model;
    }
}
