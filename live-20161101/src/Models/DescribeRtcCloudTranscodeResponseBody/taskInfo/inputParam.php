<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeRtcCloudTranscodeResponseBody\taskInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeRtcCloudTranscodeResponseBody\taskInfo\inputParam\singleSubUserParam;

class inputParam extends Model
{
    /**
     * @var singleSubUserParam
     */
    public $singleSubUserParam;
    protected $_name = [
        'singleSubUserParam' => 'SingleSubUserParam',
    ];

    public function validate()
    {
        if (null !== $this->singleSubUserParam) {
            $this->singleSubUserParam->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->singleSubUserParam) {
            $res['SingleSubUserParam'] = null !== $this->singleSubUserParam ? $this->singleSubUserParam->toArray($noStream) : $this->singleSubUserParam;
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
        if (isset($map['SingleSubUserParam'])) {
            $model->singleSubUserParam = singleSubUserParam::fromMap($map['SingleSubUserParam']);
        }

        return $model;
    }
}
